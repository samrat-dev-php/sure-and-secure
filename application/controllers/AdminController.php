<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		/*Load the URL helper*/
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->cklogin();
		$this->load->view('/admin/dashboard_view');
	}

	public function cklogin()
	{
		if (!isset($_SESSION['logged_in'])) {
			redirect('login');
		}
	}


	public function login()
	{
		$this->load->view('/admin/pages/login/login_view');
	}

	public function login_post()
	{
		$data = array(
			'username' => $this->input->post('username', true),
			'password' => md5($this->input->post('password', true)),
		);
		$logged_user_query = $this->Home_Model->login_post($data);
		if ($logged_user_query->num_rows() > 0) {
			$data = $logged_user_query->result_array();
			$data = $data[0];
//		 	echo "<pre>";
//			print_r($data);
			$newdata = array(
				'userid' => $data["id"],
				'name' => $data["name"],
				'username' => $data["username"],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
//			print_r($newdata);
			redirect('admin/dashboard');
		}
	}

	public function logout()
	{
		$array_items = array('userid', 'name', 'username', 'logged_in');
		$this->session->unset_userdata($array_items);
		if (!isset($_SESSION['logged_in'])) {
			redirect('login');
		}
	}

	public function videoSliderAdd()
	{
		$this->cklogin();
		$this->load->view('/admin/pages/video_slider/add_view');
	}

	public function _autogen_filename($name)
	{
		$t = time();
		$d = date("Ymd");
		$len = strlen($name);
		$autogen_name = 'v' . $d . $t;
		return $autogen_name;
	}

	public function _getFileExt($fileName)
	{
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		return $ext;
	}

	public function videoSliderAdd_post()
	{
		$this->cklogin();
		$vslider_title = $this->input->post('vslider_title');
		$vslider_desc = $this->input->post('vslider_desc');
		$thumb = $this->input->post('thumb');
		$vslider_file = $_FILES['vslider_file'];
		$vslider_file_thumb = $_FILES['vslider_filethumb'];

		if (empty($vslider_title) || empty($vslider_file)) {
			echo "Please fill the form !!";
		} else {
			$vslider_name = $vslider_file["name"];
			$vslider_file_thumbname = $vslider_file_thumb["name"];
			$vslider_tmp_name = $vslider_file["tmp_name"];
			$vslider_size = $vslider_file["size"];
			$vslider_type = $vslider_file["type"];
			$autogen_filename = $this->_autogen_filename($vslider_name);

			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'mp4';
			$config['overwrite'] = TRUE;
			$config['file_name'] = $autogen_filename . '.' . $this->_getFileExt($vslider_name);;
//			print_r($config);
			$this->load->library('upload', $config);
			$this->upload->do_upload('vslider_file');
			$im_name = $this->upload->data();

			// thumbnails
			if (!empty($vslider_file_thumbname)) {
				$config['upload_path'] = './thumb_images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['file_name'] = $autogen_filename . '.png';
//				print_r($config);
				$this->upload->initialize($config);
				$this->upload->do_upload('vslider_filethumb');
				$im_name = $this->upload->data();
			} else if (!empty($thumb)) {
				//echo $thumb;
				define('UPLOAD_DIR_THUMB', 'thumb_images/');
				$thumb = str_replace('data:image/png;base64,', '', $thumb);
				$thumb = str_replace(' ', '+', $thumb);
				$thumb_data = base64_decode($thumb);
				$file = UPLOAD_DIR_THUMB . $autogen_filename . '.png';
				$success = file_put_contents($file, $thumb_data);
//				echo $thumb_data;
			}
			$data = array(
				'title' => $vslider_title,
				'vdesc' => $vslider_desc,
				'filename' => $autogen_filename,
				'vorder' => $this->Home_Model->new_vorder()
			);
			$insert_query = $this->Home_Model->videoSliderAdd_post($data);
//			echo print_r($data);

			echo "data saved successfully.";
		}

	}

	public function videoSliderPreview()
	{
		$this->cklogin();
		$data = $this->Home_Model->videoSliderPreview();
		if (!empty($data)) {
			$data['rows'] = $data;
//			print_r($data);
		}
		$this->load->view('/admin/pages/video_slider/preview_view', $data);
	}

	public function videoSliderDelete($id)
	{
		$this->cklogin();
		$this->Home_Model->videoSliderDelete($id);
		echo 'data deleted successfully';
	}
	public function videoSliderEdit($id)
	{
		$this->cklogin();
		$data = $this->Home_Model->videoSliderPreviewById($id);
		$data['row'] = $data;
//		echo "<pre>";
//		print_r($data);
//		echo "</pre>";
		$this->load->view('/admin/pages/video_slider/add', $data);
	}

}

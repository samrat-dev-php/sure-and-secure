<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_Model extends CI_Model
{
	public function __construct()
	{
	}

	public function login_post($data)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get();
		return $query;
	}

	public function videoSliderAdd_post($data)
	{
		return $this->db->insert('vslider', $data);
	}

	public function new_vorder()
	{
		$sql = "SELECT max(vorder) as vorder FROM `vslider`";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		$start = 10;
		if (count($data) > 0) {
			if (!empty($data[0]['vorder'])) {
				$start = $data[0]['vorder'] + 10;
			}
		}
		return $start;
//        print_r($data);
	}

	public function videoSliderPreview()
	{
		$this->db->select('*');
		$this->db->from('vslider');
		$this->db->order_by("vorder", "desc");
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function videoSliderPreviewById($id)
	{
		$this->db->select('*');
		$this->db->from('vslider');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function videoSliderDelete($id)
	{
		$sql = "SELECT filename FROM `vslider` where id=" . $id;
		$query = $this->db->query($sql);
		$data = $query->result_array();
		if (count($data) > 0) {
			if (!empty($data[0]['filename'])) {
				$thumb = $_SERVER['DOCUMENT_ROOT'] . my_root_folder . 'thumb_images/' . $data[0]['filename'] . '.png';
				$file = $_SERVER['DOCUMENT_ROOT'] . my_root_folder . 'upload/' . $data[0]['filename'] . '.mp4';
				unlink($thumb);
				unlink($file);
				$this->db->where('id', $id);
				$this->db->delete('vslider');
			}
		}
	}

	public function emailList()
	{
		$this->db->select('location,email');
		$this->db->from('email_list');
		$this->db->order_by("location");
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}

	public function emailListByLocation($loc)
	{
		$this->db->select('email');
		$this->db->from('email_list');
		$this->db->where("location", $loc);
		$query = $this->db->get();
		$data = $query->result();
		if (count($data) > 0) {
			return $data[0]->email;
		} else {
			return null;
		}
	}

	public function viaList()
	{
		$data = array('Bus', 'Train', 'Car', 'Flight');
		return $data;
	}
}

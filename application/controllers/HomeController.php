<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		/*Load the URL helper*/
		// $this->load->helper('url');
	}

	public function index()
	{
		$data = $this->Home_Model->videoSliderPreview();
		if (!empty($data)) {
			$data['slider_rows'] = $data;
//			print_r($data);
		}
		$this->load->view('/pages/home/home_view', $data);
	}

	public function aboutUs()
	{
		$this->load->view('/pages/about_us/aboutUs_view');
	}

	public function travelPackages($content = 'religious')
	{
		$pattern = "/\b(religious)\b|\b(family)\b|\b(adventures)\b|\b(international)\b|\b(honeymoon)\b|\b(unexplored)\b/i";
//		echo preg_match($pattern, $content);
		if (!preg_match($pattern, $content)) {
			redirect('travel-packages');
		} else {
			$data = array(
//			'content' => $this->uri->segment(2, 'religious'),
				'content' => $content
			);
			$this->load->view('/pages/travel_packages/travelPackages_view', $data);
		}
	}

	public function ticketService()
	{
		$this->load->view('/pages/ticket_service/ticketService_view');
	}

	public function guideService()
	{
		$this->load->view('/pages/guide_service/guideService_view');
	}

	public function blogger()
	{
		$this->load->view('/pages/blogger/blogger_view');
	}

	public function priest()
	{
		$this->load->view('/pages/priest/priest_view');
	}

	public function ourPartners()
	{
		$this->load->view('/pages/our_partners/our_partners_view');
	}

	public function carService()
	{
		$this->load->view('/pages/car_service/carService_view');
	}

	public function visaService()
	{
		$this->load->view('/pages/visa_service/visaService_view');
	}

	public function contactUs()
	{
		$this->load->view('/pages/contact_us/contactUs_view');
	}

	public function contactUsPost()
	{
		echo 'Save data';
	}

	public function home_stays()
	{
		$this->load->view('/pages/home_stays/home_stays_view');
	}

	public function contactusHomePost()
	{
		$data = array(
			'name' => $this->input->post('c_name', true),
			'email' => $this->input->post('c_email', true),
			'contact_no' => $this->input->post('c_contact_no', true),
			'address' => $this->input->post('c_address', true),
			'destination' => $this->input->post('c_destination', true),
			'referral_code' => $this->input->post('c_referral_code', true),
			'post_date' => date("Y-m-d"),
		);
		if (empty($data['name']) || empty($data['contact_no'])) {
			$this->session->set_flashdata('contact_us_save', 'Please fill your name, contact no!');
			redirect(base_url('#contact_us_save'));
		}
		$mail_body = "<body>";
		$mail_body .= "<h2>Contact US Form</h2>";
		$mail_body .= "<table>";
		$mail_body .= "<tr><td>Post Time: </td><td>" . $data['post_date'] . "</td></tr>";
		$mail_body .= "<tr><td>Name: </td><td>" . $data['name'] . "</td></tr>";
		$mail_body .= "<tr><td>E-mail: </td><td>" . $data['email'] . "</td></tr>";
		$mail_body .= "<tr><td>Contact No: </td><td>" . $data['contact_no'] . "</td></tr>";
		$mail_body .= "<tr><td>Address: </td><td>" . $data['address'] . "</td></tr>";
		$mail_body .= "<tr><td>Destination: </td><td>" . $data['destination'] . "</td></tr>";
		$mail_body .= "<tr><td>Referral_code: </td><td>" . $data['referral_code'] . "</td></tr>";
		$mail_body .= "</table>";
		$mail_body .= "</body>";
		$mail_data = array(
			'from' => 'info@surensecuretravelsolutions.in',
			'to' => 'info@surensecuretravelsolutions.in',
			'subject' => 'SureNSecure Travel Solutions Contact Us Form',
			'body' => $mail_body,
			'pass' => 'Welcome@123',
		);
		$this->sending($mail_data);
		$this->session->set_flashdata('contact_us_save', 'Thank you...');
		redirect(base_url('#contact_us_save'));
	}

	// EMAIL
	public function send_email()
	{
		$mail_body = "<body>";
		$mail_body .= "<table>";
		$mail_body .= "<tr><td><h3>Hello Samrat Ghosh, Contact Us.<h3></td></tr>";
		$mail_body .= "</table>";
		$mail_body .= "</body>";

		$data = array(
			'from' => 'info@surensecuretravelsolutions.in',
			'tox' => 'samratg850@gmail.com',
			'to' => 'info@surensecuretravelsolutions.in',
			'subject' => 'SureNSecure Travel Solutions',
			'body' => $mail_body,
			'pass' => 'Welcome@123',
		);
		$this->sending($data);
		redirect(base_url());
	}

	public function sending($data)
	{
		if (!empty($data)) {
			// print_r($data);
		}
		$from = $data['from'];
		$user = $data['from'];
		$pass = $data['pass'];

		$to = $data['to'];
		$subject = $data['subject'];
		$body = $data['body'];

		$config = array(
			'protocol' => 'mail',
			'smtp_host' => 'mail.surensecuretravelsolutions.in',
			'smtp_port' => 465,
			'smtp_user' => $user,
			'smtp_pass' => $pass,
			'smtp_timeout' => 60,
			'mailtype' => 'html',
			'charset' => 'UTF-8',
			'validate' => FALSE,
			'crlf' => '\r\n',
			'newline' => '\r\n'
		);

		// $this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($from, $from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($body);
		$this->email->send();
	}
}

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
}

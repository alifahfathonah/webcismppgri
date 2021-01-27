<?php


class Landing extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
//		$this->load->view('welcome_message');
//		$this->load->view('dashboard/index');
		$this->load->view('landing_page_view');
		$this->load->view('templates/footer');
	}

}

<?php


class Landing extends CI_Controller
{
	public function index()
	{
		$this->load->model('model_daftar');
		$data = $this->model_daftar->get_info();
		$this->load->helper('url');
		$this->load->view('templates/header');
//		$this->load->view('welcome_message');
//		$this->load->view('dashboard/index');
		$this->load->view('landing_page_view', array('data'=>$data));
//		$this->load->view('landing_page_view', $data);
		$this->load->view('templates/footer');
//		$this->load->view('landing_page', array('data' => $data), FALSE);
	}

}

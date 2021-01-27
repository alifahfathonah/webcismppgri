<?php


class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('success/auth');
		$this->auth->cek_login();
	}
	public function index(){
		$this->load->view('success/vw_home');
	}

}

<?php


class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	public function index()
	{
		$this->load->view('templates/sbadmin/header');
//		$this->load->view('admin_page');
		$this->load->view('login_view');
		$this->load->view('templates/sbadmin/footer');

	}

}

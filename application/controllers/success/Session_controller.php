<?php


class Session_controller extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->set_userdata('name','heri');
		$this->load->view('success/session_view');
	}
	public function unset_session_data(){
		$this->load->library('session');

		$this->session->unset_userdata('name');
		$this->load->view('success/session_view');
	}
}

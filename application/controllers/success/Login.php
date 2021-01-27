<?php


class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('success/auth');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('success/vw_login');
	}
	public function proses(){
		$user_email = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth->login_user($user_email,$password)){
			redirect('success/home');
		}else{
			$this->session->set_flashdata('error', 'Username & password salah');
			redirect('success/login');
		}
	}
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('success/login');
	}

}

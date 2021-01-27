<?php


class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('success/User_model');
	}

	public function index()
	{
		$this->load->library('session');
		if ($this->session->userdata('user')) {
			redirect('homepageview');
		} else {
			$this->load->view('login_page');
		}
	}

	public function login()
	{
		$this->load->model('user_model');
		$this->load->library('session');
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');

		$data = $this->user_model->login($user_email, $user_password);
		var_dump($data);
		if ($data) {
			$this->session->set_userdata('user', $data);
			redirect('home');
		} else {
			header('location' . base_url() . $this->index());
			$this->session->set_flashdata('error', 'Invalid login');
		}


	}

	public function home()
	{
		$this->load->library('session');

		if ($this->session->userdata('usertes')) {
			$this->load->view('homepage');
		} else {
			redirect('/');
		}
	}

	public function logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('usertes');
		redirect('/');
	}
}

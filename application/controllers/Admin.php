<?php


class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('admin_helper');
		$this->load->model('model_login');
		$this->load->model('model_daftar');
	}

	public function index()
	{
		$this->load->view('templates/sbadmin/header');
//		$this->load->view('admin_page');
		$this->load->view('login_admin_view');
		$this->load->view('templates/sbadmin/footer');

	}

	function login()
	{
//		echo "Tes";
		$username = $this->input->post('useradmin');
		$pass = $this->input->post('passadmin');
		$where = array(
			'username' => $username,
			'password' => $pass
		);
		var_dump($where);
		$cek = $this->model_login->cek_login("admin", $where)->num_rows();

		if ($cek > 0) {
			$datasesiion = array(
				'username' => $username,
				'status' => 'login'
			);
			var_dump($datasesiion);
			$this->session->set_userdata($datasesiion);
			echo "Berhasil";
			redirect('Admin/dashboard');
		} else {
			echo "Pass Salah";
		}
	}
	function total_pendaftar()
	{
		$data = $this->model_daftar->get_data_all();
		$this->load->view('admin_totaldaftar_page', array('data' => $data), FALSE);
	}
	function setting()
	{
		$this->load->view('headadmin');
		$this->load->view('setting_page', FALSE);
		$this->load->view('footeradmin');
	}





	function dashboard()
	{
		// memeriksa login admin
//		periksa_login();

		// mengambil data pada database
		$isi = $this->model_daftar->get_data_date();
		$data = $this->model_daftar->get_data_all();
		$comp = array(
			'data' => $data,
			'tabel' => $this->load->view('tabel_hari_ini', array('isi' => $isi), TRUE),
			'hari_ini' => $this->load->view('total_hari_ini', array('isi' => $isi), TRUE)
		);
		$this->load->view('dashboard/admin/header');
		$this->load->view('dashboard_page', $comp, FALSE);
		$this->load->view('dashboard/admin/footer');
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

}

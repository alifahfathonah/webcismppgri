<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('user_model');
		$this->load->model('modeluserlogin');
		$this->load->library('session');
		# code...
	}


	public function dashboard()
	{
		//		if (!isset($this->session->userdata['user_email'])){
		//			redirect('User/index');
		//
		//		}
		$this->session->userdata('user_email');
		$this->load->model('user_model');
		//		$this->load->helper('urls');
		$this->session->userdata('user_email');
		$judul_user['juduldashboard'] = "Dashboard User";
		$this->load->view('templates/sbadmin/header');
		$this->load->view('templates/dashboard/index', $judul_user);
		$this->load->view('templates/sbadmin/footer');
	}

	public function register()
	{
		$this->load->view('templates/sbadmin/header');
		$this->load->view('templates/sbadmin/sidebar');
		$this->load->view('page_register');
		$this->load->view('templates/sbadmin/footer');
	}

	public function charts()
	{
		$this->load->view('templates/sbadmin/header');
		$this->load->view('charts');
		$this->load->view('templates/sbadmin/footer');
	}

	public function register_page()
	{
		$this->load->view('templates/sbadmin/header');
		$this->load->view('page_register');
		$this->load->view('templates/sbadmin/footer');
	}

	function cek_login()
	{
		$this->load->model('user_model');

		$dataloginpost = array(
			'user_email' => $this->input->post('user_email'),
			'user_password' => $this->input->post('user_password')
		);
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');


		$load = $this->user_model->cektblogin($user_email, $user_password);
		var_dump($load);
		if ($load == TRUE) {
			echo "Berhasil";
		} else {
			echo "Gagal";
		}
	}

	//Login sudah bisa
	function action_login()
	{
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');
		$where = array(
			'user_email' => $user_email,
			'user_password' => md5($user_password)
		);
		$userdatalogin = $this->modeluserlogin->getDataLogin($where)->num_rows();
		if ($userdatalogin > 0) {
			$data_session = array(
				'user_email' => $user_email,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			//			echo "Berhasil";
			redirect('User/homeinfouser');
			# code...
		} else {
			echo "Pass salah";
		}
		// $wheredatasession = array(
		// 	'user_email' => $user_email,
		// 	'user_password' => $user_password
		// );

		// $cek = $this->user_model->logintolong($wheredatasession)->num_rows();
		// if ($cek > 0) {
		// 	$data_session = array(
		// 		'nama' => $user_email,
		// 		'status' => TRUE
		// 	);
		// 	var_dump($data_session);
		// 	$this->session->set_userdata('status', TRUE);
		// 	//			$this->session->set_userdata($data_session);
		// 	//			echo "Berhasil";
		// 	//			print_r($where);
		// 	redirect('User/homeinfouser');
		// } else {
		// 	echo "Pass uname salah";
		// 	//			print_r($where);
		// }
	}

	//Login menuju home info sudah bisa http://localhost/webcismppgri/User/homeinfouser
	function homeinfouser()
	{
		if ($this->session->userdata('email')) {
			redirect('Landing');
		}
		//      echo "OK Tolong";
		//      $hasil['print'] = $this->user_model->getinfo();
		$hasil['print'] = $this->user_model->getinfo();
		//      print_r($hasil);
		//      $judul_user['juduldashboard'] = "Dashboard User";
		$this->load->view('templates/sbadmin/header');
		//      $this->load->view('templates/dashboard/index',$judul_user);
		//      $this->load->view('templates/dashboard/page _informasi', $judul_user);
		$this->load->view('templates/sbadmin/sidebar');
		$this->load->view('templates/dashboard/page_informasi', $hasil);
		//      $this->load->view('templates/sbadmin/footer');
		$this->load->view('templates/sbadmin/footer');
		//      var_dump($hasilview);
		//      $this->load->view('templates/dashboard/indextesdata',$hasil);
	}
	public function index()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if ($this->session->userdata('user')) {
			redirect('User/homeinfouser');
		} else {
			$this->load->view('login_page');
		}
	}
	function login()
	{
		$this->load->library('session');
		//		$this->load->model('user_model');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = $this->user_model->login($email, $password);

		if ($data) {
			$this->session->set_userdata('user', $data);
			redirect('User/homeinfouser');
		} else {
			header('location:' . base_url() . $this->index());
			$this->session->set_flashdata('error', 'Invalid login. User not found');
		}
	}
	public function home()
	{
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if ($this->session->userdata('user')) {
			$this->load->view('homeview');
		} else {
			redirect('/');
		}
	}

	//Fungsi Logout
	function logout()
	{
		//		$this->session->unset_userdata()
		/*$vardup = $this->session->unset_userdata('status');
		var_dump($vardup);
		$this->session->unset_userdata('nama');*/
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');

		//		redirect('Landing', 'refresh');
	}

	//Bagian Testing
	function jalankanmethod()
	{
		//		$echo =$this->user_model->tesmethod();
		//		print_r($echo);
		//		var_dump($echo);
		$data['username'] = $this->user_model->tesmethod();
		$this->load->view('tampil', $data);
	}

	function date()
	{
		$this->load->view('date');
	}

	function getdate()
	{

		$this->load->model('user_model');
		//		$this->load->view('page_register');
		if ($this->input->post() == FALSE) {
			$this->load->view('page_register');
		} else {
			echo "Berhasil";
			$data = $this->input->post('tgl_lahir');
			$ekstrak = array('data' => $data);
			var_dump($ekstrak);
			//		$this->db->set($data);
			//		$query =$this->user_model->insertdatetanggal("tb_date",$data);
			$this->db->insert('tb_date', $ekstrak);
			//		return $query;
			//			$this->load->view('page_register');
		}
	}

	function lakukan_upload()
	{
		$config['upload_path'] = './uploadsfolder';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('fileupload')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('page_register', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('uplad_page_success', $data);
		}
	}
}

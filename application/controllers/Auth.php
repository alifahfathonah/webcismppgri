<?php


class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('user_model');
		$this->load->model('model_daftar');
		$this->load->model('modeluserlogin');
		$this->load->library('session');
	}


	public function index()
	{
		$data = $this->model_daftar->get_info();
		$this->load->helper('url');
		$this->load->view('templates/header');
		//		$this->load->view('welcome_message');
		//		$this->load->view('dashboard/index');
		$this->load->view('landing_page_view', array('data' => $data));
		//		$this->load->view('landing_page_view');
		$this->load->view('templates/footer');
	}

	//Login sudah bisa
	function action_login()
	{
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');
		$where = array(
			'email_akun' => $user_email,
			'password_akun' => password_verify($user_password, TRUE)
		);
		var_dump($where);
		$userdatalogin = $this->modeluserlogin->getDataLogin($where)->num_rows();

		var_dump($userdatalogin);
		if ($userdatalogin > 0) {
			$this->session->set_userdata('email', $user_email);
			$data_session = array(
				'email_akun' => $user_email,
				'status' => "login"
			);
			//			var_dump($data_session);
			// $this->session->set_userdata($data_session);
			echo "Berhasil";
			// redirect('User/homeinfouser');
			//			echo "Benar";
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

	public function register_akun()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[tb_akun.email_akun]',
			['is_unique' => 'Email sudah terdaftar']
		);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!',
		]);
		$this->form_validation->set_rules('password2', 'Password1', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Register Page';
			$this->load->view('templates/sbadmin/header');
			$this->load->view('register_akun');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('name', true)),
				'user_email' => htmlspecialchars($this->input->post('email', true)),
				'user_password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
			];
			//			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			//            Berhasil registrasi
			//          </div>');
			echo "Berhasil Registrasi";
			$this->db->insert(' tb_calon_siswa', $data);
			//			var_dump($vardump);
			//			redirect('Auth');
			redirect('User/sukses_register');
		}
	}
	function forgot_pass()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/sbadmin/header');
			$this->load->view('lupa_password');
		} else {
			$email = $this->input->post('email');
			$clean = $this->security->xss_clean($email);
			$userinfo = $this->user_model->getInfoEmail($clean);
			if (!$userinfo) {
				$this->session->set_flashdata('message', 'Email Tidak ditemukan');
			}
		}
	}
	function data_password()
	{
		$email = $this->input->post('email');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$data = $this->model_daftar->get_lupa_password($email, $tanggal_lahir);
		// var_dump($data);
		if ($data > 0) {
			$password = $data['user_password'];
			echo 'Ketemu';
			$this->session->set_flashdata('password', $password);
			redirect('auth/lupa_password_page');
		}
		// else {
		// 	$this->session->set_flashdata('password', '*email/tanggal salah*');
		// 	redirect('user/lupa_password');
		// }
		//$password = $data['password'];
		//$this->session->set_flashdata('password', $password);
	}
	function lupa_password_page()
	{
		$this->load->view('lupa_password_page');
	}
}

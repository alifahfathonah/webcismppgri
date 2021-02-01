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
		$this->load->model('model_daftar');
		$this->load->library('session');
		// if (!$this->session->userdata('status')) {
		// 	redirect('Auth');
		// }
	}
	//Login sudah bisa
	public function action_login()
	{
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');
		$where = array(
			'user_email' => $user_email,
			// 'user_password' => password_verify($user_password, TRUE)
			'user_password' => md5($user_password)
		);
		var_dump($where);
		$userdatalogin = $this->modeluserlogin->getDataLogin("tb_calon_siswa", $where);
		var_dump($userdatalogin);
		if ($userdatalogin > 0) {
			$data_session = array(
				'user_email' => $user_email,
				'status' => "login"
			);
			//			var_dump($data_session);
			$this->session->set_userdata($data_session);
			// echo "Berhasil";
			redirect('User/homeinfouser');
			//			echo "Benar";
		} else {
			echo "Tidak Ketemu";
		}
	}


	public function dashboard()
	{
		if (!isset($this->session->userdata['user_email'])) {
			redirect('User/index');
		}
		$this->session->userdata('user_email');
		$this->load->model('user_model');
		//		$this->load->helper('urls');
		$this->session->userdata('user_email');
		$judul_user['juduldashboard'] = "Dashboard User";
		$this->load->view('templates/sbadmin/header');
		$this->load->view('templates/dashboard/index', $judul_user);
		$this->load->view('templates/sbadmin/footer');
	}

	public function register_psb()
	{
		$this->load->view('templates/sbadmin/header');
		$this->load->view('templates/sbadmin/sidebar');
		$this->load->view('page_register');
		$this->load->view('templates/sbadmin/footer');
	}
	public function register_action()
	{
		if ($foto = '') {
		} else {
			$config['upload_path'] = './uploadsfolder/';
			$config['allowed_types'] = 'jpg|png|gif';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "Upload Gagal";
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$this->load->model('Model_daftar');
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$field_name = 'foto';
		if (!$this->upload->do_upload($field_name)) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger">Penyimpanan gagal dilakukan pastikan sudah melakukan hal berikut<strong>10kb</strong></div></strong>');
			redirect('User/register');
		} else {

			$data = array(
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
				'tanggal_lahir' => htmlspecialchars($this->input->post('tgl_lahir')),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
				'jenis_kelamin' => htmlspecialchars($this->input->post('id_jenis_kelamin')),
				'agama' => htmlspecialchars($this->input->post('id_agama')),
				'alamat' => htmlspecialchars($this->input->post('alamat')),
				'nama_ibu_kandung' => htmlspecialchars($this->input->post('namaibukan')),
				'nama_ayah_kandung' => htmlspecialchars($this->input->post('namaayahkan')),
				'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaanibu')),
				'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaanayah')),
				'penghasilan_ayah' => htmlspecialchars($this->input->post('penghasilanayah')),
				'penghasilan_ibu' => htmlspecialchars($this->input->post('penghasilanibu')),
				'sd_asal' => htmlspecialchars($this->input->post('alamatsd')),
				'un_total' => htmlspecialchars($this->input->post('untotal')),
				'foto_calon_siswa' => $foto,
				'tanggal' => date("Y-m-d H:i:s")
			);
			// var_dump($data);
			$res = $this->model_daftar->simpandata($data);
			if ($res > 0) {
				echo "Berhasil";
			} else {
				echo "Gagal";
			}
		}
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

	//Login menuju home info sudah bisa http://localhost/webcismppgri/User/homeinfouser
	function homeinfouser()
	{
		// $cetak = $this->user['user'] = $this->db->get_where('tb_calon_siswa', ['user_id' => $this->session->userdata('user_id')])->row_array();
		// $cetak = $this->user['user'] = $this->db->get_where('tb_calon_siswa')->row_array();
		// $data['nama'] = $this->user['user']['nama_lengkap'];
		// var_dump($data['nama']);
		// var_dump($cetak);


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
	public function sukses_register()
	{
		$this->load->view('templates/sbadmin/header');
		$this->load->view('templates/sbadmin/sidebar');
		$this->load->view('page_sukses');
		$this->load->view('templates/sbadmin/footer');
	}
	function page_cetak()
	{
		// $data['user'] =  $this->model_daftar->get_data_calon($id);
		var_dump($this->session->userdata('email'));
		// $data = $this->model_daftar->get_data_calon();
		// $this->load->view('templates/sbadmin/header');
		// $this->load->view('templates/sbadmin/sidebar');
		// $this->load->view('print_page');
		// $this->load->view('templates/sbadmin/footer');
	}
	public function display($id)
	{
		$this->db->where('user_id', $id);
		$query = $this->db->get('tb_calon_siswa');
		return $query->result_array();
		$this->template->show('Message', $this->TPL);
	}
	function lupapass()
	{
		$this->load->view('templates/sbadmin/header');
		$this->load->view('lupa_password');
	}
	function sukses_register_akun()
	{
		$this->load->view('berhasil_register_page');
	}

	//Fungsi Logout
	function logout()
	{
		//		$this->session->unset_userdata()
		/*$vardup = $this->session->unset_userdata('status');
		var_dump($vardup);
		$this->session->unset_userdata('nama');*/
		//load session library
		$this->session->unset_userdata('user_email');
		$this->session->unset_userdata('status');
		//		$this->load->library('session');
		//		$this->session->unset_userdata('user');
		redirect('/');

		//		redirect('Landing', 'refresh');
	}
	function page_blank()
	{
		$this->load->view('page_success');
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
	public function fa()
	{
		$this->load->view('fapage');
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

<?php


class Auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}
	function login_user($username,$password){
		$query = $this->db->get_where('tb_user', array('user_email'=>$username));
		if($query->num_rows > 0){
			$data_user = $query->row();
			if(password_verify($password,$data_user->user_password)){
				$this->session->set_userdata('user_email',$username);
				$this->session->set_userdata('user_password',$data_user->user_password);
				$this->session->set_userdata('is_login',TRUE);
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	function cek_login(){
		if (empty($this->session->userdata('is_login'))){
			redirect('success/Login');
		}
	}

}

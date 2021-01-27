<?php


class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function login($user_email, $userpassword){
		/*$query = $this->db->get_where('tb_user', array('user_email'=>$user_email,'user_password'=>$userpassword));
		var_dump($this->db->last_query());*/
		$this->db->select('*');
		$this->db->from("tb_user");
		$this->db->where(array('user_email'=>$user_email,'user_password'=>$userpassword));
		$query = $this->db->get();
		return $query;
/*		$query = $this->db->get_where('tb_user', array('user_email' => $user_email, 'user_password' => $userpassword));
		return $query->row_array();*/
//		return $query->row_array();
//		return $query->row_array();
	}

}

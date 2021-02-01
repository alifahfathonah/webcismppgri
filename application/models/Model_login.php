<?php


class Model_login extends CI_Model
{

	public $tableadmin = "admin";
	//Periksa Login Admin
	function login_admin($username,$password)
	{
		$auth = array(
			'username' => $username,
			'password' => $password
		);

		$query = $this->db->get_where('admin',$auth);
		if($query->num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	public function login_admin_verif($table){
		$cetak =  $this->db->get_where($this->tableadmin, $table);
		var_dump($cetak);

	}
	public function cek_login($table, $where){
		return $this->db->get_where($table,$where);
	}

}

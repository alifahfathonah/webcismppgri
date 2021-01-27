<?php


class User_model extends CI_Model
{
	
	public $tb_user = 'tb_user';
	public $where_email = 'user_email';

	public function register_user($user)
	{
		$this->db->insert($this->tb_user, $user);

	}

	public function email_check($email)
	{
		$this->db->select('*');
		$this->db->from($this->tb_user);
		$this->db->where('user_email', $email);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}

	}

	public function cek_datalogin($username, $password)
	{
		$query = $this->db->get_where('tb_user', array('user_email' => $username, 'user_password' => $password));
		return $query->row_array();
	}

	public function login_user()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		if ($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	public function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function cektblogin($username, $password)
	{
		$query = $this->db->query("(SELECT * FROM tb_user WHERE  user_email = '$username' AND user_password = '$password')");
//'user_password' = $password");
//	return $query->num_rows();
		if ($query->count() == 1) {
			echo "Login";
		} else {
			echo "Failed";
		}
	}

	public function ceklogintolong($email)
	{
		return $this->db->get_where($this->tb_user,$email);

	}

	function getinfo()
	{
		$query = $this->db->query("SELECT * FROM tb_informasi");
		return $query->result();
////		return $query->row();
////		return $query->$this->db->get()->result_array();
////		foreach ($query->getResult() as $row) {
////			echo $row->judul_pengumuman;
////			echo $row->isi_pengumuman;
//		}
	}
//	function getinfo()
//	{
//		$this->db->select('*');
//		$this->db->from('tb_informasi');
//		return $this->db->get()->result();
//		$objek = array(
//			'judul_pengumuman' =>
//		);
//	}
//	function getinfo()
//	{
//		$query = $this->db->query("SELECT * FROM tb_informasi");
//		return $query->row();
////		return $row;
//		$objek = array(
//			'judul_pengumuman' => $row->judul_pengumuman
//		);
//		return $objek;
//	}

	function tesmethod()
	{
//		$this->db->select("*");
		$query = $this->db->get("tb_informasi");
//		return $this->db->get()->result_array();

		return $query->row();
	}
	function insertdatetanggal($tb,$datevalue){
//		$data['date'];
		return $this->db->insert($tb,$datevalue);
	}
	public function login($email, $password){
		$query = $this->db->get_where('tb_user', array('user_email'=>$email, 'user_password'=>$password));
		return $query->row_array();
	}
}

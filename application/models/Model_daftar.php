<?php


class Model_daftar extends CI_Model
{
	function simpandata($data)
	{
		$query = $this->db->insert('tb_calon_siswa', $data);
		return $query;
	}
	function do_simpan($data)
	{
		$query = $this->db->insert('data_calon', $data);
		return $query;
	}

	function get_data_all()
	{
		$this->db->order_by("tanggal", "desc");
		$query = $this->db->get('tb_calon_siswa');
		return $query;
	}

	function get_data_date()
	{
		$tanggal = date('Y-m-d');
		$query = $this->db->get_where('tb_calon_siswa', array('tanggal' => $tanggal));
		return $query;
	}

	function get_data_calon($id)
	{
		$query = $this->db->get_where('tb_calon_siswa', array('user_id' => $id));
		return $query->row_array();
	}

	function get_lupa_password($email, $tanggal_lahir)
	{
		/*$lupa = array(
			'email' => $email,
			'tanggal_lahir' => $tanggal_lahir
			); */
		$query = $this->db->get_where('tb_calon_siswa', array('user_email' => $email, 'tanggal_lahir' => $tanggal_lahir));
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return FALSE;
		}
	}

	function edit_tanggal($tgl_daftar, $nope)
	{
		$tanggal = date('Y-m-d');
		$object = array('tgl_pendaftaran' => $tgl_daftar, 'tlp_operator' => $nope, 'tanggal' => $tanggal);
		$query = $this->db->insert('setting', $object);

		if ($query) {
			$this->session->set_flashdata('aksi', 'penyimpanan berhasil');
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('aksi', 'penyimpanan gagal');
			redirect('admin/dashboard');
		}
	}

	function get_info()
	{
		$query = $this->db->get('setting');
		return $query;
	}

	function do_delete($id)
	{
		$query = $this->db->delete('data_calon', array('id' => $id));
		return $query;
	}
}

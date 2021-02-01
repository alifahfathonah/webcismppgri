<?php

class ModelUserLogin extends CI_Model
{
    public $table = "tb_akun";
    public $tabelcalon = "tb_calon_siswa";
    public $tableadmin = "admin";
    public function getDataLogin($tabel, $where)
    {
        $query = $this->db->get_where($tabel, $where);
        return $query->result();
        // return $this->db->get_where($tabel, $where);
    }
    /* public function login_admin_verif($table){
    	return $this->db->get_where($this->tableadmin, $table);

}*/
}

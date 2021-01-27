<?php

class ModelUserLogin extends CI_Model
{
    public $table = "tb_user";
    public function getDataLogin($where)
    {
        return $this->db->get_where($this->table, $where);
    }
}

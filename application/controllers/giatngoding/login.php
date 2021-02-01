<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('giatngoding/m_login');
    }
    public function index()
    {
        $this->load->view('giatngoding/v_login');
    }
    function aksi_login()
    {
        $username = $this->input->post('username');
        $userpass = $this->input->post('password');
        $where = array(
            'user_email' => $username,
            'user_password' => md5($userpass)
        );
        $cek = $this->m_login->cek_login("tb_calon_siswa", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'user_email' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($where);

            // redirect(base_url("giatngoding/login/loadview"));
            redirect('User/homeinfouser');
            // loadview()
        } else {
            echo "Password Username salah";
        }
    }
    function loadview()
    {
        $this->load->view('giatngoding/v_admin');
    }
}

<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            # code...
            redirect(base_url("giatngoding/login"));
        }
    }
    function index()
    {
        $this->load->view('giatngoding/v_admin');
    }
}

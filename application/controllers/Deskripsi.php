<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Deskripsi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'role_login'));
        $this->load->model('Global_model');
    }


    public function index()
    {
        $data['get_all_deskripsi']  = $this->Global_model->result_deskripsi();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('deskripsi/index', $data);
        $this->load->view('template/footer');
    }

    public function logout()
    {
        $this->role_login->logout();
    }
}

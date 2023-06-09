<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Role_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('Auth_model');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->Auth_model->login($username, $password);
        if ($cek) {
            $nama_pegawai = $cek->nama_pegawai;
            $username = $cek->username;
            $id_pegawai = $cek->id_pegawai;
            $this->ci->session->set_userdata('nama_pegawai', $nama_pegawai);
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('id_pegawai', $id_pegawai);
            redirect('dashboard');
        } else {
            $this->ci->session->set_flashdata('salah', 'Username  Tidak Terdaftar');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('nama_pegawai');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->set_flashdata('logout', 'Anda Berhasil Logout');
        redirect('auth');
    }
}

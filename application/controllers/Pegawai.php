<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Pegawai extends CI_Controller
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
        $data['get_all_pegawai']  = $this->Global_model->result_pegawai();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pegawai/index', $data);
        $this->load->view('template/footer');
        $this->load->view('pegawai/ajax');
    }

    function tambah()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telpon = $this->input->post('no_telpon');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = [
            'nama_pegawai' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'username' => $username,
            'password' => $password
        ];
        $this->Global_model->tambah_pegawai($data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('pegawai');
    }

    function edit()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telpon = $this->input->post('no_telpon');
        $username = $this->input->post('username');
        $id_pegawai = $this->input->post('id_pegawai');
        $cek_password = $this->input->post('password');
        $where = [
            'id_pegawai' => $id_pegawai,
        ];
        if ($cek_password) {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data = [
                'nama_pegawai' => $nama,
                'email' => $email,
                'no_telpon' => $no_telpon,
                'username' => $username,
                'password' => $password
            ];
        } else {
            $data = [
                'nama_pegawai' => $nama,
                'email' => $email,
                'no_telpon' => $no_telpon,
                'username' => $username
            ];
        }

        $this->Global_model->update_pegawai($where, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
        redirect('pegawai');
    }

    function hapus($id_pegawai)
    {
        $this->Global_model->delete_pegawai($id_pegawai);
        $this->session->set_flashdata('danger', 'Data Berhasil Di Hapus');
        redirect('pegawai');
    }
}

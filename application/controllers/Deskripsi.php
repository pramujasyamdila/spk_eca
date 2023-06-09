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

    function tambah()
    {
        $nama_deskripsi = $this->input->post('nama_deskripsi');
        $data = [
            'nama_deskripsi' => $nama_deskripsi,
        ];
        $this->Global_model->tambah_deskripsi($data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('deskripsi');
    }


    function edit()
    {
        $id_deskripsi_mobil = $this->input->post('id_deskripsi_mobil');
        $nama_deskripsi = $this->input->post('nama_deskripsi');
        $where = [
            'id_deskripsi_mobil' => $id_deskripsi_mobil,
        ];
        $data = [
            'nama_deskripsi' => $nama_deskripsi,
        ];
        $this->Global_model->update_deskripsi($where, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
        redirect('deskripsi');
    }

    function hapus($id_deskripsi_mobil)
    {
        $this->Global_model->delete_deskripsi($id_deskripsi_mobil);
        $this->session->set_flashdata('danger', 'Data Berhasil Di Hapus');
        redirect('deskripsi');
    }
}

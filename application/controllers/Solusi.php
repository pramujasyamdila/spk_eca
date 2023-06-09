<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Solusi extends CI_Controller
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
        $data['get_all_solusi']  = $this->Global_model->result_solusi();
        $data['get_mobil'] = $this->Global_model->result_mobil();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('solusi/index', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $nama_solusi = $this->input->post('nama_solusi');
        $id_mobil = $this->input->post('id_mobil');
        $data = [
            'nama_solusi' => $nama_solusi,
            'id_mobil' => $id_mobil,
        ];
        $this->Global_model->tambah_solusi($data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('solusi');
    }

    function edit()
    {
        $nama_solusi = $this->input->post('nama_solusi');
        $id_mobil = $this->input->post('id_mobil');
        $id_solusi = $this->input->post('id_solusi');
        $data = [
            'nama_solusi' => $nama_solusi,
            'id_mobil' => $id_mobil,
        ];
        $where = [
            'id_solusi' => $id_solusi,
        ];

        $this->Global_model->update_solusi($where, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
        redirect('solusi');
    }

    function hapus($id_solusi)
    {
        $this->Global_model->delete_solusi($id_solusi);
        $this->session->set_flashdata('danger', 'Data Berhasil Di Hapus');
        redirect('solusi');
    }
}

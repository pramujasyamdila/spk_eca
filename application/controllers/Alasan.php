<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Alasan extends CI_Controller
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
        $data['get_all_alasan']  = $this->Global_model->result_alasan();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('alasan/index', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $kode_alasan = $this->input->post('kode_alasan');
        $nama_alasan = $this->input->post('nama_alasan');
        $densitas = $this->input->post('densitas');
        $data = [
            'kode_alasan' => $kode_alasan,
            'nama_alasan' => $nama_alasan,
            'densitas' => $densitas,
        ];
        $this->Global_model->tambah_alasan($data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('alasan');
    }

    function edit()
    {
        $kode_alasan = $this->input->post('kode_alasan');
        $nama_alasan = $this->input->post('nama_alasan');
        $densitas = $this->input->post('densitas');
        $id_alasan = $this->input->post('id_alasan');
        $where = [
            'id_alasan' => $id_alasan,
        ];
        $data = [
            'kode_alasan' => $kode_alasan,
            'nama_alasan' => $nama_alasan,
            'densitas' => $densitas,
        ];
        $this->Global_model->update_alasan($where, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
        redirect('alasan');
    }

    function hapus($id_alasan)
    {
        $this->Global_model->delete_alasan($id_alasan);
        $this->session->set_flashdata('danger', 'Data Berhasil Di Hapus');
        redirect('alasan');
    }
}

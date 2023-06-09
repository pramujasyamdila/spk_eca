<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Tamu extends CI_Controller
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
        $data['get_all_tamu']  = $this->Global_model->result_tamu();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tamu/index', $data);
        $this->load->view('template/footer');
    }

    function tambah()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telpon = $this->input->post('no_telpon');
        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
        ];
        $this->Global_model->tambah_tamu($data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Tambah');
        redirect('tamu');
    }

    function edit()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telpon = $this->input->post('no_telpon');
        $id_tamu = $this->input->post('id_tamu');
        $where = [
            'id_tamu' => $id_tamu,
        ];
        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
        ];
        $this->Global_model->update_tamu($where, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
        redirect('tamu');
    }

    function hapus($id_tamu)
    {
        $this->Global_model->delete_tamu($id_tamu);
        $this->session->set_flashdata('danger', 'Data Berhasil Di Hapus');
        redirect('tamu');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function add_tamu()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_telpon' => $this->input->post('no_telpon')
		];
		$this->db->insert('tbl_tamu', $data);
		$this->output->set_content_type('application/json')->set_output(json_encode('success'));
	}
}

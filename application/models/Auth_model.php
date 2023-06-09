<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->where('username', $username);
        return $this->db->get()->row();
    }

    public function cek_password_lama($id_pegawai)
    {
        $query = $this->db->query("SELECT * FROM tbl_pegawai WHERE id_pegawai = '$id_pegawai'");
        return $query->row();
    }

    public function ganti_password($id_pegawai, $password_baru)
    {
        $query = $this->db->query("UPDATE tbl_pegawai SET password = '$password_baru' WHERE id_pegawai = $id_pegawai");
        return $query;
    }
}

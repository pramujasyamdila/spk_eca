<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Global_model extends CI_Model
{


    // ININ UNTUK DESKRIPSI
    public function result_deskripsi()
    {
        $this->db->select('*');
        $this->db->from('tbl_deskripsi_mobil');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function row_deksripsi($id_deskripsi_mobil)
    {
        $this->db->select('*');
        $this->db->from('tbl_deskripsi_mobil');
        $this->db->where('tbl_deskripsi_mobil.id_deskripsi_mobil', $id_deskripsi_mobil);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_deskripsi($id_deskripsi_mobil)
    {
        $this->db->delete('tbl_deskripsi_mobil', ['id_deskripsi_mobil' => $id_deskripsi_mobil]);
        return $this->db->affected_rows();
    }

    public function tambah_deskripsi($data)
    {
        $this->db->insert('tbl_deskripsi_mobil', $data);
        return $this->db->affected_rows();
    }
    public function update_deskripsi($where, $data)
    {
        $this->db->update('tbl_deskripsi_mobil', $data, $where);
        $updatedId = $this->db->get('tbl_deskripsi_mobil')->row_array();
        return $updatedId;
    }



    // ININ UNTUK MOBIL
    public function result_mobil()
    {
        $this->db->select('*');
        $this->db->from('tbl_mobil');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function row_mobil($id_mobil)
    {
        $this->db->select('*');
        $this->db->from('tbl_mobil');
        $this->db->where('tbl_mobil.id_mobil', $id_mobil);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_mobil($id_mobil)
    {
        $this->db->delete('tbl_mobil', ['id_mobil' => $id_mobil]);
        return $this->db->affected_rows();
    }

    public function tambah_mobil($data)
    {
        $this->db->insert('tbl_mobil', $data);
        return $this->db->affected_rows();
    }
    public function update_mobil($where, $data)
    {
        $this->db->update('tbl_mobil', $data, $where);
        $updatedId = $this->db->get('tbl_mobil')->row_array();
        return $updatedId;
    }


    // ININ UNTUK pegawai
    public function result_pegawai()
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function row_pegawai($id_pegawai)
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->where('tbl_pegawai.id_pegawai', $id_pegawai);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_pegawai($id_pegawai)
    {
        $this->db->delete('tbl_pegawai', ['id_pegawai' => $id_pegawai]);
        return $this->db->affected_rows();
    }

    public function tambah_pegawai($data)
    {
        $this->db->insert('tbl_pegawai', $data);
        return $this->db->affected_rows();
    }
    public function update_pegawai($where, $data)
    {
        $this->db->update('tbl_pegawai', $data, $where);
        $updatedId = $this->db->get('tbl_pegawai')->row_array();
        return $updatedId;
    }


    // ININ UNTUK tamu
    public function result_tamu()
    {
        $this->db->select('*');
        $this->db->from('tbl_tamu');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function row_tamu($id_tamu)
    {
        $this->db->select('*');
        $this->db->from('tbl_tamu');
        $this->db->where('tbl_tamu.id_tamu', $id_tamu);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_tamu($id_tamu)
    {
        $this->db->delete('tbl_tamu', ['id_tamu' => $id_tamu]);
        return $this->db->affected_rows();
    }

    public function tambah_tamu($data)
    {
        $this->db->insert('tbl_tamu', $data);
        return $this->db->affected_rows();
    }
    public function update_tamu($where, $data)
    {
        $this->db->update('tbl_tamu', $data, $where);
        $updatedId = $this->db->get('tbl_tamu')->row_array();
        return $updatedId;
    }


    // ININ UNTUK alasan
    public function result_alasan()
    {
        $this->db->select('*');
        $this->db->from('tbl_alasan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function row_alasan($id_alasan)
    {
        $this->db->select('*');
        $this->db->from('tbl_alasan');
        $this->db->where('tbl_alasan.id_alasan', $id_alasan);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_alasan($id_alasan)
    {
        $this->db->delete('tbl_alasan', ['id_alasan' => $id_alasan]);
        return $this->db->affected_rows();
    }

    public function tambah_alasan($data)
    {
        $this->db->insert('tbl_alasan', $data);
        return $this->db->affected_rows();
    }
    public function update_alasan($where, $data)
    {
        $this->db->update('tbl_alasan', $data, $where);
        $updatedId = $this->db->get('tbl_alasan')->row_array();
        return $updatedId;
    }


    // solusi
    function result_solusi()
    {
        $this->db->select('*');
        $this->db->from('tbl_solusi');
        $this->db->join('tbl_mobil', 'tbl_solusi.id_mobil = tbl_mobil.id_mobil');
        $query = $this->db->get();
        return $query->result_array();
    }

    function tambah_solusi($data)
    {
        $this->db->insert('tbl_solusi', $data);
        return $this->db->affected_rows();
    }

    public function update_solusi($where, $data)
    {
        $this->db->update('tbl_solusi', $data, $where);
        $updatedId = $this->db->get('tbl_solusi')->row_array();
        return $updatedId;
    }


    public function delete_solusi($id_solusi)
    {
        $this->db->delete('tbl_solusi', ['id_solusi' => $id_solusi]);
        return $this->db->affected_rows();
    }
    // end solusi
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_lokasi extends CI_Model
{
    var $table = 'mst_site';
    var $order = array('id_site', 'id_site', 'nama_site', 'id_site');

    private function _get_data_query()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->order as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_site', 'DESC');
        }
    }

    public function getdatatable() //nam[ilin data pake ini
    {
        $this->_get_data_query(); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_data()
    {
        $this->_get_data_query(); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function insert($data)
    {
        $this->db->insert('mst_site', $data);
        return $this->db->affected_rows();
    }

    public function delete($id_site)
    {
        $this->db->delete('mst_site', array('id_site' => $id_site));
        return $this->db->affected_rows();
    }

    public function update($data, $where)
    {
        $this->db->where('id_site', $where);
        $this->db->update('mst_site', $data);
        return $this->db->affected_rows();
    }
}

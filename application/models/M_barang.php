<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_barang extends CI_Model
{

    var $table = 'trx_produk';
    var $order = array('kd_produk', 'kd_produk', 'nm_produk', 'uom', 'qty', 'kg', 'barcode');

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
            $this->db->order_by('kd_produk', 'DESC');
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

    public function get_result()
    {
        $query = $this->db->query("SELECT * FROM mst_site");
        return $query->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('trx_produk', $data);
        return $this->db->affected_rows();
    }

    public function delete($barcode)
    {
        $this->db->delete('trx_produk', array('barcode' => $barcode));
        return $this->db->affected_rows();
    }

    public function count_barang()
    {
        $this->db->select('*');
        $this->db->from('trx_produk');
        return $this->db->count_all_results();
    }

    public function update($qty, $barcode)
    {
        $this->db->where('barcode', $barcode);
        $this->db->update('trx_produk', ['qty' => $qty]);
        return $this->db->affected_rows();
    }
}

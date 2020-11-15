
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_model
{

    public function getProduct()
    {
        $this->db->select('*');
        $this->db->from('log_trc');
        // $this->db->join('kategori_produk', 'tabel_item.id_kategori = kategori_produk.id_kategori');
        return $query = $this->db->get()->result_array();
    }

    public function getNewProduct()
    {
        return $this->db->get('log_trc')->result_array();
    }


    public function tampilData($id)
    {
        return $this->db->where('id_trc', $id)
            ->get('log_trc')
            ->row();
    }

    public function getAllItem()
    {

        $query = $this->db->query('SELECT * FROM log_trc');

        return $query->result_array();
    }

    public function getPelanggan()
    {
        $query = $this->db->query('');
    }

    public function cari($keyword)
    {
        $this->db->select('*');
        $this->db->from('log_trc');
        $this->db->like('nm_trc', $keyword);
        return $this->db->get()->result_array();
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($data, $table);
    }

    public function getById($id = '')
    {
        $query = $this->db->query("SELECT * FROM log_item WHERE id_itm = '$id'");
        // $this->db->get_where($table, array($key => $id))->result_array();
        return $query->result_array();
    }
}

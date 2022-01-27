<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{

    public function getAllItem()
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        return $query = $this->db->get()->result_array();
    }

    public function delete($id)
    {
        $this->db->delete('tbl_barang', ['id' => $id]);
    }

    public function add($table = '', $data = '')
    {
        $this->db->insert($table, $data);
    }

    public function getById($id = '')
    {
        $query = $this->db->query("SELECT * FROM tbl_barang WHERE id = '$id'");
        return $query->result_array();
    }

    public function getItemById($id = '')
    {
        $query = $this->db->query("SELECT * FROM tbl_barang WHERE id = '$id'");
        return $query->result_array();
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($data, $table);
    }

    public function displayCart($id)
    {
        return $this->db->where('id', $id)->get('tbl_barang')->row();
    }
}
/* End of file Item_model.php */
<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function getAllItem()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        return $query = $this->db->get()->result_array();
    }

    public function getAllCustomer()
    {
        $query = $this->db->query("SELECT id, username, fname, lname, SUM(total_order) AS total_order FROM tbl_pembeli JOIN tbl_pembelian WHERE id_pembeli = id GROUP BY id");
        return $query->result_array();
    }

    public function getJumlahBarang()
    {
        $this->db->select('tbl_barang.id, count(tbl_barang.id) as total');
        $query = $this->db->get('tbl_barang');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getJumlahPembeli()
    {
        $this->db->select('tbl_pembeli.id, count(tbl_pembeli.id) as total');
        $query = $this->db->get('tbl_pembeli');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getJumlahAdmin()
    {
        $this->db->select('tbl_admin.id, count(tbl_admin.id) as total');
        $query = $this->db->get('tbl_admin');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    // public function getJoinItem()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tabel_item');
    //     $this->db->join('kategori_produk', 'tabel_item.id_kategori = kategori_produk.id_kategori');
    //     return $query = $this->db->get()->result_array();
    // }

    // public function getJoinTransaction()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tabel_item');
    //     $this->db->join('data_designer', 'data_designer.id = tabel_item.id_item');
    //     return $query = $this->db->get()->result_array();
    // }

    public function getAll($table = '')
    {
        return $this->db->get($table)->result_array();
    }

    public function add($table = '', $data = '')
    {
        $this->db->insert($table, $data);
    }

    public function delete($id)
    {
        $this->db->delete('tbl_admin', ['id' => $id]);
    }

    // public function getById($id = '')
    // {
    //     $query = $this->db->query("SELECT * FROM tabel_item JOIN kategori_produk ON tabel_item.id_kategori = kategori_produk.id_kategori WHERE id_item = '$id'");
    //     // $this->db->get_where($table, array($key => $id))->result_array();
    //     return $query->result_array();
    // }

    // public function getTscById($id = '')
    // {
    //     $query = $this->db->query("SELECT * FROM log_trc WHERE id_trc = '$id'");
    //     // $this->db->get_where($table, array($key => $id))->result_array();
    //     return $query->result_array();
    // }

    // public function delete($id)
    // {
    //     $this->db->delete('tabel_item', ['id_item' => $id]);
    // }

    // public function deleteTsc($id)
    // {
    //     $this->db->delete('pembelian', ['id_pembelian' => $id]);
    // }

    // public function tampilDataPembeli()
    // {
    //     return $this->db->get('pembelian');
    // }

    // public function updateStatus()
    // {
    //     $id = $_REQUEST['id'];
    //     $vals = $_REQUEST['val'];

    //     if ($vals == 1) {
    //         $status = 0;
    //     } else {
    //         $status = 1;
    //     }

    //     $data = array(
    //         'status' => $status
    //     );
    //     $this->db->where('id_pelanggan', $id);
    //     return $this->db->update('pelanggan', $data);
    // }

    // public function updateStatusTsc()
    // {
    //     $id = $_REQUEST['id'];
    //     $vals = $_REQUEST['val'];

    //     if ($vals == 1) {
    //         $status = 0;
    //     } else {
    //         $status = 1;
    //     }

    //     $data = array(
    //         'status' => $status
    //     );
    //     $this->db->where('id_trc', $id);
    //     return $this->db->update('log_trc', $data);
    // }
}

/* End of file Item_model.php */

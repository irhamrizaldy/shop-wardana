<?php


defined('BASEPATH') or exit('No direct script access allowed');

class News_model extends CI_Model
{

    public function getJoinItem()
    {
        $this->db->select('*');
        $this->db->from('log_news');
        // $this->db->join('kategori_produk', 'tabel_item.id_kategori = kategori_produk.id_kategori');
        return $query = $this->db->get()->result_array();
    }

    public function getJoinTransaction()
    {
        $this->db->select('*');
        $this->db->from('log_news');
        // $this->db->join('data_designer', 'data_designer.id = tabel_item.id_item');
        return $query = $this->db->get()->result_array();
    }

    public function getAll($table = '')
    {
        return $this->db->get($table)->result_array();
    }

    public function add($table = '', $data = '')
    {
        $this->db->insert($table, $data);
    }

    public function getById($id = '')
    {
        $query = $this->db->query("SELECT * FROM log_news WHERE id_news = '$id'");
        // $this->db->get_where($table, array($key => $id))->result_array();
        return $query->result_array();
    }

    public function getTscById($id = '')
    {
        $query = $this->db->query("SELECT * FROM log_news WHERE id_news = '$id'");
        // $this->db->get_where($table, array($key => $id))->result_array();
        return $query->result_array();
    }

    public function delete($id)
    {
        $this->db->delete('log_news', ['id_news' => $id]);
    }

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
    //         $statusTsc = 0;
    //     } else {
    //         $statusTsc = 1;
    //     }

    //     $data = array(
    //         'statusTsc' => $statusTsc
    //     );
    //     $this->db->where('id_pembelian', $id);
    //     return $this->db->update('pembelian', $data);
    // }

    // public function getCountItem()
    // {
    //     $this->db->select('tabel_item.id_item, count(tabel_item.id_item) as total');
    //     $query = $this->db->get('tabel_item');
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     }
    // }

    public function getCountNews()
    {
        $this->db->select('log_news.id_news, count(log_news.id_news) as total');
        $query = $this->db->get('log_news');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }




























    // public function getAllItem()
    // {
    //     $query = $this->db->query('SELECT * FROM produk JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori');

    //     return $query->result_array();
    // }

    // public function addItem()
    // {
    //     $config['upload_path'] = './assets/img/product';
    //     $config['allowed_types'] = 'jpg|png';
    //     $config['overwrite'] =  true;
    //     $config['max_size'] = 2000;

    //     $this->load->library('upload', $config);

    //     if ( ! $this->upload->do_upload('foto')) {
    //         echo "gagal upload";
    //     }
    //     else{
    //         $img = $this->upload->data();
    //         $foto = $img['file_name'];
    //         $data = [
    //                     "nama_produk" => $this->input->post('nama_produk',true),
    //                     "harga" => $this->input->post('harga',true),
    //                     "status" => $this->input->post('status',true),
    //                     "stok" => $this->input->post('stok',true),
    //                     "berat" => $this->input->post('berat',true),
    //                     "foto" => $foto,
    //                     "deskripsi" => $this->input->post('deskripsi',true),
    //                     "id_kategori" => $this->input->post('id_kategori',true)
    //                 ];

    //         $this->db->insert('produk', $data);
    //         }
    // }

    // public function deleteItem($id)
    // {
    //     $this->db->where('id_produk', $id);
    //     $this->db->delete('produk');
    // }

    // public function getItemById($id)
    // {
    //     return $this->db->get('produk', ['id_produk' => $id])->row_array();
    // }
}

/* End of file Item_model.php */

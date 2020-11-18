<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['item'] = $this->Item_model->getJoinItem();
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Item';
        $data['content'] = 'item/item';
        $this->load->view('admin/templates/index', $data);
    }

    public function addItem()
    {
        $this->form_validation->set_rules('nm_itm', 'Nama Barang', 'required');
        $this->form_validation->set_rules('prc_itm', 'Harga', 'required');
        $this->form_validation->set_rules('desc_itm', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Barang - Page';
            $data['judul'] = 'Form Add Item';
            $data['content'] = 'item/additem';
            $this->load->view('admin/templates/index', $data);
        } else {
            $config['upload_path'] = './assets/front/images/';
            $config['allowed_types'] = 'jpg|png';
            $config['overwrite'] =  true;
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img')) {
                $img = $this->upload->data();
                $foto = $img['file_name'];
                $items = [
                    "nm_itm" => $this->input->post('nm_itm', true),
                    "prc_itm" => $this->input->post('prc_itm', true),
                    "img" => $foto,
                    "desc_itm" => $this->input->post('desc_itm', true)
                ];
                $this->Item_model->add('log_item', $items);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/item');
            }
        }
    }

    public function detailItem()
    {
        $id = $this->uri->segment(4);
        $data['details'] = $this->Item_model->getById($id);
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Detail Item';
        $data['content'] = 'item/detailItem';
        $this->load->view('admin/templates/index', $data);
    }

    public function deleteItem($id)
    {
        // $row = 'User-icon.png';
        // @unlink(base_url('assets/img/product/User-icon.png'));
        $this->Item_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/item');
    }

    // public function updateItem()
    // {

    //     $id = $this->uri->segment(4);
    //     $data['item'] = $this->Admin_model->getById($id);

    //     $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required');
    //     $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
    //     $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    //     $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
    //     $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
    //     // $this->form_validation->set_rules('status', 'Status', 'required');
    //     // $this->form_validation->set_rules('foto', 'Foto', 'required');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['category'] = $this->Admin_model->getAll('kategori_produk');
    //         $data['title'] = 'Item - Page';
    //         $data['judul'] = 'Form Ubah Item';
    //         $data['content'] = 'admin/ubahitem';
    //         $this->load->view('admin/templates/index', $data);
    //     } else {

    //         $id_produk = $this->input->post('id_produk');
    //         $id_kategori = $this->input->post('id_kategori');
    //         $nama_produk = $this->input->post('nama_kategori');
    //         $harga = $this->input->post('harga');
    //         $stok = $this->input->post('stok');
    //         $berat = $this->input->post('berat');
    //         // $foto = $this->input->post('foto');
    //         $deskripsi = $this->input->post('deskripsi');

    //         $config['upload_path'] = './assets/front/img/';
    //         $config['allowed_types'] = 'jpg|png';
    //         $config['overwrite'] =  true;
    //         $config['max_size'] = 2000;

    //         $this->load->library('upload', $config);

    //         if ($this->upload->do_upload('foto')) {
    //             $img = $this->upload->data();
    //             $foto = $img['file_name'];
    //             $data = [
    //                 "id_kategori" => $id_kategori,
    //                 "nama_produk" => $nama_produk,
    //                 "harga" => $harga,
    //                 // "status" => $this->input->post('status', true),
    //                 "stok" => $stok,
    //                 "berat" => $berat,
    //                 "foto" => $foto,
    //                 "deskripsi" => $deskripsi
    //             ];

    //             $where = array(
    //                 'id_produk' => $id_produk
    //             );

    //             $this->Item_model->updateData($where, $data, 'produk');
    //             redirect('admin/item');
    //         }
    //     }



















    // public function index()
    // {
    //     $data['item'] = $this->Item_model->getAllItem();
    //     $data['title'] = 'Item - Page';
    //     $data['judul'] = 'Item';
    //     $data['content'] = 'admin/item';
    //     $this->load->view('admin/templates/index',$data);

    // }

    // public function addItem()
    // {
    //     $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
    //     $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    //     $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
    //     $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
    //     $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required');
    //     $this->form_validation->set_rules('status', 'Status', 'required');
    //     // $this->form_validation->set_rules('foto', 'Foto', 'required');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['category'] = $this->Kategori_model->getAllCategory();
    //         $data['title'] = 'Item - Page';
    //         $data['judul'] = 'Form Add Item';
    //         $data['content'] = 'admin/additem';
    //         $this->load->view('admin/templates/index',$data);
    //     } else {
    //         $this->Item_model->addItem();
    //         $this->session->set_flashdata('flash', 'Ditambahakan');
    //         redirect('admin/item');
    //     }

    // }

    // public function updateItem($id)
    // {
    //     $data['item'] = $this->Item_model->getItemById($id);

    //     $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
    //     $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    //     $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
    //     $this->form_validation->set_rules('berat', 'Berat', 'required|numeric');
    //     $this->form_validation->set_rules('id_kategori', 'Id_Kategori', 'required');
    //     $this->form_validation->set_rules('status', 'Status', 'required');
    //     // $this->form_validation->set_rules('foto', 'Foto', 'required');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['category'] = $this->Kategori_model->getAllCategory();
    //         $data['title'] = 'Item - Page';
    //         $data['judul'] = 'Form Update Item';
    //         $data['content'] = 'admin/ubahitem';
    //         $this->load->view('admin/templates/index',$data);
    //     } else {
    //         $this->Item_model->addItem();
    //         $this->session->set_flashdata('flash', 'Diubah');
    //         redirect('admin/item');
    //     }

    // }

    // public function deleteItem($id)
    // {
    //     $this->Item_model->deleteItem($id);
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('admin/item');
    // }

    // public function detail

}
/* End of file Item.php */

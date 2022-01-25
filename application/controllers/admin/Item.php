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
        if ($this->session->userdata('uname') == FALSE) {
            redirect('admin/login/auth');
        } else {
            $data['item'] = $this->Item_model->getAllItem();
            $data['title'] = 'Barang - Page';
            $data['judul'] = 'Data Barang Dagang';
            $data['content'] = 'item/item';
            $this->load->view('admin/templates/index', $data);
        }
    }

    public function post()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga', 'required');
        $this->form_validation->set_rules('stok_barang', 'Stok', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Barang - Page';
            $data['judul'] = 'Form Tambah Barang Baru';
            $data['content'] = 'item/additem';
            $this->load->view('admin/templates/index', $data);
        } else {
            $config['upload_path'] = './assets/front/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] =  true;
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_barang')) {
                $img = $this->upload->data();
                $foto = $img['file_name'];
                $items = [
                    "nama_barang" => $this->input->post('nama_barang', true),
                    "harga_barang" => $this->input->post('harga_barang', true),
                    "stok_barang" => $this->input->post('stok_barang', true),
                    "gambar_barang" => $foto
                ];
                $this->Item_model->add('tbl_barang', $items);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('admin/item');
            } else {
                var_dump($_POST);
                die();
            }
        }
    }

    public function detailItem()
    {
        $id = $this->uri->segment(4);
        $data['details'] = $this->Item_model->getById($id);
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Detail Barang';
        $data['content'] = 'item/detailItem';
        $this->load->view('admin/templates/index', $data);
    }

    public function deleteItem($id)
    {
        $this->Item_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/item');
    }

    public function updateItem()
    {
        $this->session->set_flashdata('flash', 'Coming soon!');
        redirect('admin/item');
    }
}
/* End of file Item.php */

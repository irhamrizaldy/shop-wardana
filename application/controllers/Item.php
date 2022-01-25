<?php
class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $data['title'] = 'Tambah Barang - Page';
        $data['judul'] = 'Form Tambah Barang Baru';
        $data['content'] = 'item/additem';
        $this->load->view('admin/templates/index', $data);
    }
}

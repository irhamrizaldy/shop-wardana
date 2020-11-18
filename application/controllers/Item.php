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
        $data['judul'] = 'Item';
        $data['designer'] = $this->Item_model->getJoinItem();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/designer/index');
        $this->load->view('public/templates/footer');
    }
}

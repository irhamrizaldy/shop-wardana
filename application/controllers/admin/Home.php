<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        if ($this->session->userdata('uname') == FALSE) {
            redirect('admin/login/auth');
        } else {
            $data['tbl_admin'] = $this->Admin_model->getJumlahAdmin();
            $data['tbl_barang'] = $this->Admin_model->getJumlahBarang();
            $data['tbl_pembeli'] = $this->Admin_model->getJumlahPembeli();
            $data['content'] = 'admin/dashboard';
            $data['judul'] = 'Dashboard';
            $data['title'] = 'Dashboard - Page';
            $this->load->view('admin/templates/index', $data);
        }
    }
}

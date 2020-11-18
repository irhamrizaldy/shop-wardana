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
        if ($this->session->userdata('email') == FALSE) {
            redirect('admin/login/auth');
        } else {
            $data['data_trc'] = $this->Admin_model->getCountTrc();
            $data['data_item'] = $this->Admin_model->getCountItem();
            $data['news'] = $this->Admin_model->getCountNews();
            $data['content'] = 'admin/dashboard';
            $data['judul'] = 'Dashboard';
            $data['title'] = 'Dashboard - Page';
            $this->load->view('admin/templates/index', $data);
        }
    }
}

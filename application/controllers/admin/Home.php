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
            $data['tabel_item'] = $this->Admin_model->getCountItem();
            $data['data_designer'] = $this->Admin_model->getCountDesigner();
            $data['comment'] = $this->Admin_model->getCountMessages();
            $data['content'] = 'admin/dashboard';
            $data['judul'] = 'Dashboard';
            $data['title'] = 'Dashboard - Page';
            $this->load->view('admin/templates/index', $data);
        }
    }
}

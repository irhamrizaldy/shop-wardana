<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['cust'] = $this->Admin_model->getAllCustomer();
        $data['title'] = 'Customer - Page';
        $data['judul'] = 'Daftar Customer';
        $data['content'] = 'admin/cust-list';
        $this->load->view('admin/templates/index', $data);
    }
}
/* End of file Item.php */

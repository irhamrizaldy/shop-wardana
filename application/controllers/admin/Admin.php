<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
            $data['admin'] = $this->Admin_model->getAllItem();
            $data['title'] = 'Admin - Page';
            $data['judul'] = 'Data Admin';
            $data['content'] = 'admin/admin-list';
            $this->load->view('admin/templates/index', $data);
        }
    }

    public function deleteAdmin($id)
    {
        $this->Admin_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/admin');
    }
}
/* End of file Item.php */

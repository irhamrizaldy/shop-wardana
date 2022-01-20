<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $data['title'] = 'Register - Wardana Shop';
        $this->load->view('public/user/templates/header', $data);
        $this->load->view('public/user/register');
        $this->load->view('public/user/templates/footer');
    }
}

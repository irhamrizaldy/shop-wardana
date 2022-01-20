<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $data['title'] = 'Login - Wardana Shop';
        $this->load->view('public/user/templates/header', $data);
        $this->load->view('public/user/login');
        $this->load->view('public/user/templates/footer');
    }
}

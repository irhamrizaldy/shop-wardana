<?php
class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Checkout - Wardana Shop';
        $this->load->view('public/user/templates/header', $data);
        $this->load->view('public/user/checkout');
        $this->load->view('public/user/templates/footer');
    }
}

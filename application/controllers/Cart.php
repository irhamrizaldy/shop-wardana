<?php
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Cart - Wardana Shop';
        $this->load->view('public/user/templates/header', $data);
        $this->load->view('public/user/cart');
        $this->load->view('public/user/templates/footer');
    }
}

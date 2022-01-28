<?php
class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index()
    {
        if ($this->session->userdata('username') == FALSE) {
            redirect('login');
        } else {
            $data['title'] = 'Checkout - Wardana Shop';
            $this->load->view('public/user/templates/header', $data);
            $this->load->view('public/user/checkout');
            $this->load->view('public/user/templates/footer');
        }
    }

    public function checkout()
    {
        if ($this->session->userdata('username') == null) {
            redirect('login');
        } else {
            //save new order
            $order = array(
                'id_pembeli' => $this->session->userdata('id'),
                'nama_pembeli' => $this->session->userdata('nama_pembeli'),
                'alamat' => $this->input->post('alamat'),
                'total_order' => $this->cart->total_items(),
                'total_harga' => $this->cart->total(),
                'tanggal_order' => date('Y-m-d'),
                'ongkir' => $this->input->post('alamat')
            );
            $this->Order_model->create($order);

            $this->cart->destroy();
            redirect(base_url());
        }
    }
}

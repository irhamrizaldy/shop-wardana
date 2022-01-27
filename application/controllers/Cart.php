<?php
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Item_model');
    }

    public function index()
    {
        if ($this->session->userdata('username') == FALSE) {
            redirect('login');
        } else {
            $data['title'] = 'Cart - Wardana Shop';
            $data['content'] = 'public/user/cart';
            $this->load->view('public/user/templates/dashboard', $data);
        }
    }

    public function add($id_barang)
    {
        $barang = $this->Item_model->displayCart($id_barang);
        $data = array(array(
            'id'    => $barang->id,
            'qty'   => 1,
            'price' => $barang->harga_barang,
            'name'  => $barang->nama_barang
        ));
        $this->cart->insert($data);
        redirect(base_url());
    }

    public function delete($rowid)
    {
        $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
        redirect(base_url());
    }
}

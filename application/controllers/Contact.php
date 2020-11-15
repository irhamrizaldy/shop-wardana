<?php
class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    public function index($id = '')
    {
        $data['judul'] = 'Contact Us';
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/contact/index');
        $this->load->view('public/templates/footer');
    }

    public function addMsg()
    {
        $xmsg = [
            'email' => $this->input->post('email', true),
            'name' => $this->input->post('name', true),
            'msg' => $this->input->post('msg', true)
        ];
        $this->Admin_model->add('comment', $xmsg);
        redirect(base_url());
    }
}

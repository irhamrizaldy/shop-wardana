<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Messages extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Messages_model');
    }

    public function index()
    {
        $data['messages'] = $this->Messages_model->getJoinItem();
        $data['title'] = 'Messages - Page';
        // $data['judul'] = 'Item';
        $data['content'] = 'admin/messages';
        $this->load->view('admin/templates/index', $data);
    }
}

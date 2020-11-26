<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    }

    public function index()
    {
        $data['messages'] = $this->News_model->getJoinItem();
        $data['title'] = 'News - Page';
        $data['content'] = 'admin/news';
        $this->load->view('admin/templates/index', $data);
    }

    public function detailNews()
    {
        $id = $this->uri->segment(4);
        $data['details'] = $this->News_model->getById($id);
        $data['title'] = 'News - Page';
        $data['judul'] = 'Detail Berita';
        $data['content'] = 'admin/detailNews';
        $this->load->view('admin/templates/index', $data);
    }
}

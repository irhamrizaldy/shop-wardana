<?php
class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $this->load->view('form-trc/index');
    }

    public function addTrc()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pesanan', 'Pesanan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form-trc/index');
        } else {
            $config['upload_path'] = './assets/img/trc/';
            $config['allowed_types'] = 'jpg|png';
            $config['overwrite'] =  true;
            $config['max_size'] = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img')) {
                $img = $this->upload->data();
                $foto = $img['file_name'];
                $trc = [
                    "nama" => $this->input->post('nama', true),
                    "kontak" => $this->input->post('kontak', true),
                    "alamat" => $this->input->post('alamat', true),
                    "pesanan" => $this->input->post('pesanan', true),
                    "img" => $foto,
                ];
                $this->Item_model->add('log_trc', $trc);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('home');
            }
        }
    }
}

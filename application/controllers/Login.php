<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login - Wardana Shop';
            $this->load->view('public/user/templates/header', $data);
            $this->load->view('public/user/login');
            $this->load->view('public/user/templates/footer');
        } else {
            // validation success
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_pembeli', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['hash_password'])) {
                $data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'nama_pembeli' => $user['nama_pembeli'],
                    'fname' => $user['fname'],
                    'lname' => $user['lname']
                ];
                $this->session->set_userdata($data);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered!</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->cart->destroy();
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('is_authenticated');
        // $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url());
    }
}

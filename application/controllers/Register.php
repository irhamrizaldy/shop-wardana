<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->library('form_validation');
    }

    public function index($id = '')
    {
        $data['title'] = 'Register - Wardana Shop';
        $this->load->view('public/user/templates/header', $data);
        $this->load->view('public/user/register');
        $this->load->view('public/user/templates/footer');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_pembeli.username]', ['is_unique' => 'This username has already registered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', ['min_length' => 'Password too short!']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register - Wardana Shop';
            $this->load->view('public/user/templates/header', $data);
            $this->load->view('public/user/register');
            $this->load->view('public/user/templates/footer');
        } else {
            $data = [
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => $this->input->post('password'),
                'hash_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_pembeli' => $this->input->post('fname') . " " . $this->input->post('lname')
            ];

            $this->db->insert('tbl_pembeli', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulations! Your account has been created.</div>');
            redirect('register');
        }
    }
}

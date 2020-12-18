<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata()) {
            $data['session'] = $this->session->userdata();
        }
        $data['title'] = "Registration";

        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_akun.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/register', $data);
        } else {
            $this->adduser($this->input->post());
        }
    }
    public function login()
    {

        $data['title'] = 'Login';
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/login', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = $this->input->post('password');
        $data = $this->model->getId(['email ' => $email], 'tb_akun')->row_array();

        if ($data) {
            if (password_verify($password, $data['password'])) {
                $data = [
                    'email' => $data['email'],
                    'team' => $data['id_team'],
                    'active' => $data['active']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account is not registered !!</div>');
            redirect('login');
        }
    }

    private function addUser($data)
    {
        $passwordawal = $this->input->post('password');
        $password = password_hash($passwordawal, PASSWORD_DEFAULT);
        $id_team = uniqid();
        $active = 0;
        $date = time();
        $data = array(
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => $password,
            'active' => $active,
            'upload' => $active,
            'id_team' => $id_team,
            'date' => $date

        );
        $this->model->add_items($data, 'tb_akun');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been registered !! </div>');
        redirect('login');
    }
}

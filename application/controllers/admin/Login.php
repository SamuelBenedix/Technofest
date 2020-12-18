<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin/dashboard');
        }

        $data['title'] = 'Login Admin';
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/auth/login', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email'));
        $password = $this->input->post('password');
        $data = $this->model->getId(['email ' => $email], 'tb_admin')->row_array();

        if ($data) {
            if (password_verify($password, $data['password'])) {
                $data = [
                    'email' => $data['email'],
                    'nama' => $data['nama'],
                    'active' => $data['active']
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password </div>');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account is not registered !!</div>');
            redirect('admin/login');
        }
    }

    public function addItems()
    {
        $temp = $this->input->post();
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_admin.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['akun'] = $this->model->show_item('tb_admin')->result();
            $this->load->view('admin/akun', $data);
        } else {
            $data = $this->addLocation($temp);
            $this->model->add_items($data, 'tb_admin');
            redirect('admin/akun');
        }
    }

    private function addLocation($data)
    {
        $passwordawal = $this->input->post('password');
        $password = password_hash($passwordawal, PASSWORD_DEFAULT);
        $data = array(
            'email' => htmlspecialchars($this->input->post('email')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'password' => $password,
            'active' => 1
        );
        return $data;
    }
}

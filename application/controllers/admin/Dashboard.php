<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['users'] = $this->model->getId($where, 'tb_admin')->row_array();
        $this->load->view('admin/dashboard', $data);
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('active');
        $this->session->unset_userdata('nama');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You has been log out</div>');
        redirect('admin/login');
    }
}

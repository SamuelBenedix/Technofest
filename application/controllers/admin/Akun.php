<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
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
        $data['akun'] = $this->model->show_item('tb_admin')->result();
        $this->load->view('admin/akun', $data);
    }
    public function perserta()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['users'] = $this->model->getId($where, 'tb_admin')->row_array();
        $data['perserta'] = $this->model->show_item('tb_akun')->result();
        $this->load->view('admin/akunperserta', $data);
    }
}

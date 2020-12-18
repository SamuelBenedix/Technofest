<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perserta extends CI_Controller
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
        $data['anggota'] = $this->model->getId(['st_anggota' => 1], 'tb_anggota')->result();

        $this->load->view('admin/perserta', $data);
    }

    public function details()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['users'] = $this->model->getId($where, 'tb_admin')->row_array();
        $direct = $_GET['team'];
        $data['ang'] = $this->model->getTeam(['id_team' => $direct], 'tb_anggota')->row_array();

        if (isset($data['ang'])) {

            $data['team'] = $data['ang']['id_team'];
            $data['asal'] = $data['ang']['asal'];
            $data['lomba'] = $data['ang']['lomba'];
            $data['akn'] = $this->model->getId(['id_team' => $direct], 'tb_akun')->row_array();

            $data['email'] = $data['akn']['email'];
            $data['telepon'] = $data['akn']['telepon'];

            $data['anggota'] = $this->model->getTeam(['id_team' => $direct], 'tb_anggota')->result();

            $this->load->view('admin/details', $data);
        } else {
            redirect('admin/dashboard');
        }
    }
}

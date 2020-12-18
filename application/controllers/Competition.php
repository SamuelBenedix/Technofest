<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Competition extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('active') == 0) {
            $data['session'] = $this->session->userdata();

            if ($_GET) {
                if ($_GET['type'] == 'essay' or 'debate' or 'bisplan') {
                    $data['direct'] = $_GET['type'];
                    if ($this->session->userdata()) {
                        $data['session'] = $this->session->userdata();
                    }
                    $data['title'] = 'Registration Competition';
                    $this->load->view('home/register', $data);
                } else {
                    redirect('home');
                }
            } else {
                redirect('home');
            }
        } else {
            redirect('competition/team');
        }
    }
    public function debate()
    {
        if ($this->session->userdata('email')) {
            $data['session'] = $this->session->userdata();
        }
        $data['title'] = 'Debate Competition';
        $this->load->view('home/debate', $data);
    }
    public function bisplan()
    {
        if ($this->session->userdata('email')) {
            $data['session'] = $this->session->userdata();
        }
        $data['title'] = 'Bussiness Plan';
        $this->load->view('home/bisplan', $data);
    }
    public function essay()
    {
        if ($this->session->userdata('email')) {
            $data['session'] = $this->session->userdata();
        }
        $data['title'] = 'Essay Competition';
        $this->load->view('home/essay', $data);
    }


    public function team()
    {
        if ($this->session->userdata('email')) {
            $data['session'] = $this->session->userdata();
            $data['title'] = 'Team Competition';
            $data['active'] =  $this->model->getId(['email' => $data['session']['email']], 'tb_akun')->row_array();
            $data['nim'] =  $data['active']['nim'];
            $data['active'] =  $data['active']['active'];

            $data['teams'] =  $this->model->getId(['nim' => $data['nim']], 'tb_anggota')->result();
            $this->load->view('home/team', $data);
        } else {
            redirect('home');
        }
    }

    public function details($direct)
    {
        $data['details'] =  $this->model->getTeam(['id_team' => $direct], 'tb_anggota')->result();
        if (isset($data['details'])) {
            if ($this->session->userdata('email')) {
                $data['session'] = $this->session->userdata();
                $data['title'] = 'Team Competition';
                $data['active'] =  $this->model->getId(['email' => $data['session']['email']], 'tb_akun')->row_array();
                $data['active'] =  $data['active']['active'];

                $this->load->view('home/details', $data);
            } else {
                redirect('home');
            }
        } else {
            redirect('competition/team');
        }
    }
}

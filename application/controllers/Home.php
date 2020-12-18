<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $data['set'] = 'home';
        if ($this->session->userdata('email')) {
            $data['session'] = $this->session->userdata();
        }
        $this->load->view('home/index', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('active');
        $this->session->unset_userdata('team');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You has been log out</div>');
        redirect('login');
    }
    public function regist()
    {
        $type = $this->input->post('type');
        $idteam = uniqid();
        $email = $this->session->userdata('email');
        $namatim = $this->input->post('namaTim');
        $nama1 = $this->input->post('nama1');
        $nim1 = $this->input->post('nim1');
        $asal1 = $this->input->post('asal1');
        $telp1 = $this->input->post('telp1');
        $status1 = $this->input->post('status1');
        $anggota = $this->input->post('anggota');


        if ($type == 'essay') {
            $namatim = $nama1;
            $anggota = 1;
        }

        if (isset($_FILES)) {
            $config['allowed_types'] = 'rar|zip|pdf';
            $config['upload_path'] = 'asset/file/';
            $config['encrypt_name']             = TRUE;
            $this->load->library('upload', $config);
            if (!empty($_FILES['userfile'])) {
                if ($this->upload->do_upload('userfile')) {
                    $userfile = $this->upload->data('file_name');
                }
            }

            $data = array(
                'id_team' => $idteam,
                'file' => $userfile

            );
            $this->model->add_items($data, 'tb_file');
        }

        if ($nama1 and $nim1 and $asal1 and $telp1 and $status1) {
            $data = array(
                'id_team' => $idteam,
                'lomba' => $type,
                'team' => $namatim,
                'nim' => $nim1,
                'nama' => $nama1,
                'asal' => $asal1,
                'status' => $status1,
                'anggota' => $anggota,
                'st_anggota' => 1
            );

            $this->model->add_items($data, 'tb_anggota');
        }

        $nama2 = $this->input->post('nama2');
        $nim2 = $this->input->post('nim2');
        $asal2 = $this->input->post('asal2');
        $status2 = $this->input->post('status2');

        if ($nama2 and $nim2 and $asal2  and $status2) {
            $data = array(
                'id_team' => $idteam,
                'team' => $namatim,
                'lomba' => $type,
                'nama' => $nama2,
                'nim' => $nim2,
                'asal' => $asal2,
                'status' => $status2,
                'anggota' => $anggota,
                'st_anggota' => 2
            );

            $this->model->add_items($data, 'tb_anggota');
        }

        $nama3 = $this->input->post('nama3');
        $nim3 = $this->input->post('nim3');
        $asal3 = $this->input->post('asal3');
        $status3 = $this->input->post('status3');


        if ($nama3 and $nim3 and $asal3  and $status3) {
            $data = array(
                'id_team' => $idteam,
                'team' => $namatim,
                'lomba' => $type,
                'nama' => $nama3,
                'asal' => $asal3,
                'nim' => $nim3,
                'status' => $status3,
                'anggota' => $anggota,
                'st_anggota' => 2
            );
            $this->model->add_items($data, 'tb_anggota');
        }

        $data = array(
            'active' => 1,
            'upload' => 1,
            'nim' => $nim1,
            'telpon' => $telp1
        );
        $this->model->updateData(['email' => $email], $data, 'tb_akun');

        redirect('competition/team');
    }

    public function download()
    {
        $direct = $_GET['data'];

        if ($direct == 'bisnisplan') {
            force_download('asset/guide/guide-book-bisnis-plan.pdf', null);
        } elseif ($direct == 'debate') {
            force_download('asset/guide/guide-book-debate.pdf', null);
        } elseif ($direct == 'essay') {
            force_download('asset/guide/guide-book-essay.pdf', null);
        }
    }
}

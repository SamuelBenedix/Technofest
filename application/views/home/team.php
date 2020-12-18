<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>

    <section id="home ">
        <div class="container contitle">
            <h1 class="mb-2 font-weight-bold ltext-105 text-center">Your Team</h1>
        </div>

        <div class="container my-5">
            <!-- DataTales Example -->

            <div class="card shadow mb-4">
                <div class="card-header py-3">

                    <?php if ($active != 1) : ?>
                        <button type="button" class="btn cl0 bg1 hov-btn3 p-lr-5 trans-04 btn-icon-split float-right" data-toggle="modal" data-target="#staticBackdrop">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus mr-3"></i>
                            </span>
                            <span class="text">Add Competition</span>
                        </button>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id team</th>
                                    <th>Nama team</th>
                                    <th>Nama Ketua</th>
                                    <th>Lomba</th>
                                    <th>Pengaturan</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($teams as $team) : ?>
                                    <tr>
                                        <?php if ($team->st_anggota == 1) : ?>
                                            <td><?= $team->id_team ?></td>
                                            <td><?= $team->team ?></td>
                                            <td><?= $team->nama ?></td>
                                            <td><?= $team->lomba ?></td>
                                            <td class="text-center">
                                                <?= anchor('competition/details/' . $team->id_team, '<div class="btn btn-primary btn-sm">
                                         <i class="fas fa-search-plus"></i></div>') ?>
                                            </td>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('template/footer'); ?>
    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>
    <?php $this->load->view('template/modal'); ?>
    <?php $this->load->view('template/script'); ?>
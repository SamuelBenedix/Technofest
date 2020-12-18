<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>

    <section id="home ">
        <div class="container contitle">


            <h1 class="mb-2 font-weight-bold ltext-105 text-center p-b-25">
                Data Team
            </h1>



            <?php foreach ($details as $detail) : ?>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <?php if ($detail->st_anggota == 1) : ?>
                                    <h5 class="card-title ml-3">Leader Team</h5>
                                    <div class="container p-4">
                                        <div class="form-group">
                                            <label for="inputnTim">Nama Tim</label>
                                            <input type="text" class="form-control" id="inputTim" value="<?= $detail->team ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputnama">Nama</label>
                                            <input type="text" class="form-control" id="inputnama" value="<?= $detail->nama ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNim">NIM/NISN</label>
                                            <input type="text" class="form-control" id="inputNim" value="<?= $detail->nim ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAsal">Asal Sekolah / Kampus</label>
                                            <input type="text" class="form-control" id="inputAsal" value="<?= $detail->asal ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNotelepon">No Telepon</label>
                                            <input type="text" class="form-control" id="inputNotelepon" value="<?= $detail->telepon ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNotelepon">Status</label>
                                            <input type="text" class="form-control" id="inputNotelepon" value="<?= $detail->status ?>" readonly />
                                        </div>
                                    </div>

                                <?php else : ?>

                                    <h5 class="card-title ml-3">Anggota</h5>
                                    <div class="container p-4">
                                        <div class="form-group">
                                            <label for="inputnTim">Nama Tim</label>
                                            <input type="text" class="form-control" id="inputTim" value="<?= $detail->team ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputnama">Nama</label>
                                            <input type="text" class="form-control" id="inputnama" value="<?= $detail->nama ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNim">NIM/NISN</label>
                                            <input type="text" class="form-control" id="inputNim" value="<?= $detail->nim ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAsal">Asal Sekolah / Kampus</label>
                                            <input type="text" class="form-control" id="inputAsal" value="<?= $detail->asal ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNotelepon">No Telepon</label>
                                            <input type="text" class="form-control" id="inputNotelepon" value="<?= $detail->telepon ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNotelepon">Status</label>
                                            <input type="text" class="form-control" id="inputNotelepon" value="<?= $detail->status ?>" readonly />
                                        </div>
                                    </div>



                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

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

    <?php $this->load->view('template/script'); ?>
<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>

    <section id="home ">
        <div class="container contitle">
            <?php if ($direct == 'debate') : ?>
                <h1 class="mb-2 font-weight-bold ltext-105 text-center p-b-25">
                    Register Debate Competition
                </h1>
            <?php elseif ($direct == 'bisplan') : ?>
                <h1 class="mb-2 font-weight-bold ltext-105 text-center p-b-25">
                    Register Bisnis Plan Competition
                </h1>
            <?php elseif ($direct == 'essay') : ?>
                <h1 class="mb-2 font-weight-bold ltext-105 text-center p-b-25">
                    Register Essay Competition
                </h1>
            <?php else : ?>
                <?php redirect('competition/team'); ?>
            <?php endif; ?>
            <?= form_open_multipart('home/regist'); ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="card-title ml-3">Leader Team</h5>

                            <div class="container p-4">
                                <?php if ($direct != 'essay') : ?>
                                    <div class="form-group">
                                        <label for="inputnTim">Nama Tim</label>
                                        <input type="text" class="form-control" id="inputTim" name="namaTim" placeholder="Nama Tim" required />
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="inputnama">Nama</label>
                                    <input type="text" class="form-control" id="inputnama" name="nama1" placeholder="Nama Lengkap" required />
                                    <input name="type" type="hidden" class="form-control" value="<?= $direct ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputNim">NIM/NISN</label>
                                    <input type="text" class="form-control" id="inputNim" name="nim1" placeholder="NIM/NISM" required />
                                </div>
                                <div class="form-group">
                                    <label for="inputAsal">Asal Sekolah / Kampus</label>
                                    <input type="text" class="form-control" id="inputAsal" name="asal1" placeholder="Asal Sekolah/Kampus" required />
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email1" placeholder="Email" value=" <?= $session['email'] ?>" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="inputNotelepon">No Telepon</label>
                                    <input type="text" class="form-control" id="inputNotelepon" name="telp1" placeholder=" No Telepon/Whatsapp" required />
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select name="status1" id="inputState" class="form-control " required>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Siswa ">Siswa</option>
                                    </select>
                                </div>
                                <?php if ($direct != 'essay') : ?>
                                    <div class="form-group">
                                        <label for="inputMember">Jumlah Anggota</label>
                                        <select name="anggota" id="inputMember" class="form-control" required>
                                            <option selected value="1">Satu</option>
                                            <option value="2">Dua</option>
                                            <option value="3">Tiga</option>
                                        </select>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="second">
                <div class="col-lg-8">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="card-title ml-3">Anggota Team 1</h5>

                            <div class="container p-4">
                                <div class="form-group">
                                    <label for="inputnama">Nama</label>
                                    <input type="text" class="form-control" id="inputnama" name="nama2" placeholder="Nama Lengkap" />
                                </div>
                                <div class="form-group">
                                    <label for="inputNim">NIM/NISN</label>
                                    <input type="text" class="form-control" id="inputNim" name="nim2" placeholder="NIM/NISM" />
                                </div>
                                <div class="form-group">
                                    <label for="inputAsal">Asal Sekolah / Kampus</label>
                                    <input type="text" class="form-control" id="inputAsal" name="asal2" placeholder="Asal Sekolah/Kampus" />
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select name="status2" id="inputState" class="form-control">
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Siswa ">Siswa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="third">
                <div class="col-lg-8">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="card-title ml-3">Anggota Team 2</h5>
                            <div class="container p-4">
                                <div class="form-group">
                                    <label for="inputnama">Nama</label>
                                    <input type="text" class="form-control" id="inputnama" name="nama3" placeholder="Nama Lengkap" />
                                </div>
                                <div class="form-group">
                                    <label for="inputNim">NIM/NISN</label>
                                    <input type="text" class="form-control" id="inputNim" name="nim3" placeholder="NIM/NISM" />
                                </div>
                                <div class="form-group">
                                    <label for="inputAsal">Asal Sekolah / Kampus</label>
                                    <input type="text" class="form-control" id="inputAsal" name="asal3" placeholder="Asal Sekolah/Kampus" />
                                </div>


                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select name="status3" id="inputState" class="form-control">
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Siswa ">Siswa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="second">
                <div class="col-lg-8">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="card-title ml-3">Form Berkas</h5>
                            <div class="custom-file userfile">
                                <input name="label_1" type="hidden" class="form-control" id="userfile">
                                <input type="file" class="custom-file-input " id="userfile" name="userfile">
                                <label class="custom-file-label" for="userfile">Choose file</label>
                            </div>

                            <input class="btn stext-112 cl0 size-126 bg1 mt-3  hov-btn3 btn-block p-lr-5  trans-04  " type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= form_close(); ?>
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
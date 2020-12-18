<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>


    <section id="home">
        <div class="container contitle">
            <div class="row">
                <div class="col-lg">
                    <div class="container hoverlogo block2-pic hov-img1 d-flex justify-content-center">
                        <img src="<?= base_url('asset/logo/logo-debate.png') ?>" alt="IMG-LOGO" class="logos m-all-30" />
                    </div>
                </div>
                <div class="col-lg">

                    <h1 class=" mb-2 font-weight-bold ltext-105 competitle">Debate Competition </h1>
                    <p class="mb-3 stext-100"> Online Debat Competition merupakan salah satu cabang dari berbagai kompetisi yang ada pada Technofest 2020 yang diselenggarakan oleh Himpunan Mahasiswa Sistem Komputer Fakultas Ilmu Komputer Universitas Sriwijaya. Kompetisi Debat Online ini kami buka untuk siswa SMK, Mahasiswa Diploma, dan Sarjana Perguruan Tinggi se-Indonesia. </p>
                    <p class="mb-3 stext-100">Tujuan diadakannya kompetisi ini ialah untuk meningkatkan daya saing Mahasiswa dan para pelajar melalui media debat ilmiah, Meningkatkan kemampuan Bahasa Indonesia, dan menciptakan kompetisi yang sehat antar Mahasiswa dan para pelajar, Meningkatkan kemampuan Mahasiswa untuk berpikir kritis, kreatif, kemampuan berkomunikasi.</p>
                    <p class="stext-100">Kompetisi ini mengusung tema yang <b>"Technology for Living"</b></p>

                    <ul class="mt-3">
                        <li class="mtext-114">
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pendaftaran Online</div>
                                <div class="col-12 col-sm">14 September - 14 Oktober 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengumuman Tahapan Seleksi </div>
                                <div class="col-12 col-sm">17 Oktober 2020 </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Semi Final</div>
                                <div class="col-12 col-sm">30 Oktober - 1 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengumuman 5 Tim Terbaik </div>
                                <div class="col-12 col-sm">8 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Final </div>
                                <div class="col-12 col-sm">20 November - 22 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengumuman Pemenang </div>
                                <div class="col-12 col-sm">12 Desember 2020</div>
                            </div>
                        </li>
                    </ul>
                    <div class=" p-t-25">
                        <div class="d-flex  flex-button">
                            <?php if (!isset($session['email'])) : ?>
                                <a href="<?= base_url('register') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
                                    Join Us
                                </a>
                            <?php else : ?>
                                <a href="<?= base_url('competition?type=debate') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
                                    Join Us
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="infomasi " class="mb-5 m-t-150">
        <div class="container">
            <h1 class="ltext-105 text-center "> Informasi Lomba</h1>
            <ul class=" mt-5 mtext-110">
                <li class="my-2"> <i class="fas fa-long-arrow-alt-right"></i>
                    <p>Seluruh peserta diwajibkan membaca rulebook sebelum melakukan pendaftaran</p>
                </li>
                <li class="my-2"> <i class="fas fa-long-arrow-alt-right"></i>
                    <p>Peserta mendaftarkan timnya pada laman pendaftaran Competitive Programming</p>
                </li>
                <li class="my-2"><i class="fas fa-long-arrow-alt-right"></i>

                    <p>Bila tim sudah menyelesaikan proses pembayaran dan pendaftaran, peserta akan mendapatkan otentikasi melalui email. </p>
                </li class="my-2"><i class="fas fa-long-arrow-alt-right"></i>
                <li>
                    <p class="font-weight-bold"> Seluruh Rangkaian Kompetisi Akan Diselenggarakan Secara Daring</p>
                </li>
            </ul>
            <div class=" p-t-25">
                <div class="d-flex  flex-button">
                    <a href="<?= base_url('download?data=debate') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
                        Guide Book
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="about " class="mb-5 m-t-150">
        <div class="container">
            <h1 class="ltext-105 text-center "> Frequenly Asked Qestion </h1>
            <ul class=" mt-5 mtext-110">
                <li class="my-2">
                    <div class="font-weight-bold">Bagaimana cara mendaftarkan diri dalam Kompetisi Online Debate Competition Technofest 2020 ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Peserta telah mengikuti prosedur pendaftaran website resmi Technofest2020 (http://...........) dan melengkapi data pendaftaran dengan benar. Peserta yang tidak memenuhi persyaratan pendaftaran sampai waktu yang ditentukan akan dinyatakan gugur</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold">Apakah setiap peserta harus melengkapi data pribadi secara terpisah ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Pengunggahan data dilakukan dengan mengunggah Foto/Scan Bukti Pembayaran dan Foto/Scan Kartu Tanda Mahasiswa.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold">Bolehkan mendaftarkan timlebih dari 2 orang?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Tidak diperbolehkan, karena kompetisi ini diwajibkan masing-masing tim berjumlah dua orang.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold">Bagaimana sistem kompetisi Online Debate Competition?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Pada kompetisi ini terdapat 3 Tahapan : Seleksi Esai merupakan tahap pertama, dalam tahapan pertama ini masing-masing ketua tim akan mengirimkan karya esai nya pada alamat e-mail yang telah di jelaskan. Tahapan Semi Final dilakukan guna mengambil 10 besar tim yang telah lolos karya esainya kemudian diambil 5 besar tim terbaik untuk mengikuti tahapan Final selanjutnya. Kemudian pada tahapanfinal 5 tim finalis akan melakukan sesi debat kembali demi memperebutkan juara I, II dan III.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold">Apakah siswa SMK diperbolehkan mengikuti kompetisi ini ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Ya sangat diperbolehkan, karena menurut syarat dan ketentuan kompetisi ini yang diperbolehkan ialah siswa SMA/SMK dan Mahasiswa.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold">Bolehkah peserta online debate competition juga mendaftarkan diri pada cabang kompetisi lain di Technofest 2020 ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Boleh, tetapi hanya sebagai anggota saja.</p>
                </li>

            </ul>

        </div>
    </section>




    <section class="mb-5 p-t-70" id="contact">
        <div class="container  ">
            <div class="mb-5">
                <div class="text-center">
                    <h1 class=" font-weight-bold ltext-105 mt-3">Contact</h1>

                    <p>
                        Untuk teknis dan informasi selengkapnya bisa hubungi kami melalui kontak dibawah ini.
                    </p>
                </div>
            </div>

            <div class="row justify-content-md-center">

                <div class="col col-lg-4  m-t-50">
                    <h1 class="text-center ltext-204"> Debate Competition</h1>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center ">
                                <img src="<?= base_url('asset/logo/logo-wa.png') ?>" alt=" IMG-LOGO-WA" />
                            </div>
                            <h5 class="text-center ltext-205">Whatsapp Number</h5>
                            <p class="text-center ltext-206"> Nurulia Muliasari </p>
                            <p class="text-center stext-113 font-weight-bold "> 0897-3092-645 </p>
                        </div>
                        <div class="col-6 ">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('asset/logo/logo-line.png') ?>" alt="IMG-LOGO-LINE" />
                            </div>
                            <h5 class="text-center ltext-205">Line Id</h5>
                            <p class="text-center ltext-206"> Arif Tumpal Leonardo </p>
                            <p class="text-center  stext-113 font-weight-bold"> @arifn_11 </p>
                        </div>
                    </div>
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

    <?php $this->load->view('template/script'); ?>
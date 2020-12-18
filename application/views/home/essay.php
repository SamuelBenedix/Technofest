<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>


    <section id="home">
        <div class="container contitle">
            <div class="row">
                <div class="col-lg">
                    <div class="container hoverlogo block2-pic hov-img1 d-flex justify-content-center">
                        <img src="<?= base_url('asset/logo/logo-essay.png') ?>" alt="IMG-LOGO" class="logos m-all-30" />
                    </div>
                </div>
                <div class="col-lg">

                    <h1 class=" mb-2 font-weight-bold ltext-105 competitle">Essay Competition </h1>
                    <p class="mb-3 stext-100"> Essay Competition yang merupakan lomba esai tingkat nasional bagi pelajar
                        SMA/SMK/MA & mahasiswa aktif S1/D3/D4 seluruh perguruan tinggi Indonesia. Lomba esai nasional
                        ini merupakan lomba tulisan berisi ide atau gagasan kreatif yang dikembangkan menurut ketentuan
                        pola pikir ilmiah dan mengacu pada informasi kekinian yang reliable, permasalahan beserta
                        pemecahannya dengan mengusung tema <b> “Peranan Hardware dan Software Dalam Industri Digital”</b> </p>

                    <ul class="mt-3">
                        <li class="mtext-114">
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pendaftaran dan Pengiriman (Gelombang 1)</div>
                                <div class="col-12 col-sm">14 September – 14 Oktober 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pendaftaran dan Pengiriman (Gelombang 2) </div>
                                <div class="col-12 col-sm">15 Oktober – 1 November 2020 </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengumuman Finalis 5 Besar</div>
                                <div class="col-12 col-sm">9 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengiriman Video Presentasi </div>
                                <div class="col-12 col-sm">10 November – 23 November 2020</div>
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
                                <a href="<?= base_url('competition?type=essay') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
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
                    <a href="<?= base_url('download?data=essay') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
                        Guide Book
                    </a>
                </div>
            </div>

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
                                <img src="<?= base_url('asset/logo/logo-wa.png') ?>" alt="IMG-LOGO-WA" />
                            </div>
                            <h5 class="text-center ltext-205">Whatsapp Number</h5>
                            <p class="text-center ltext-206"> Icha Dwi Marsella </p>
                            <p class="text-center  stext-113 font-weight-bold"> 0858-0968-5369 </p>
                        </div>
                        <div class="col-6 ">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('asset/logo/logo-line.png') ?>" alt="IMG-LOGO-LINE" />
                            </div>
                            <h5 class="text-center ltext-205">Line Id</h5>
                            <p class="text-center ltext-206"> Dewa Purnama H. </p>
                            <p class="text-center  stext-113 font-weight-bold"> @depe1209 </p>
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
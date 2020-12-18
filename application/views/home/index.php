<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>


    <section id="home">
        <div class="container contitle">
            <div class="row">
                <div class="col-lg">
                    <div class="container hoverlogo block2-pic hov-img1 d-flex justify-content-center">
                        <img src=" <?= base_url('asset/logo/logo-technofest.png') ?>" alt="IMG-LOGO" class="logos m-all-30" />
                    </div>
                </div>
                <div class="col-lg">

                    <h1 class=" mb-4 font-weight-bold ltext-105 title">Technology Festival </h1>
                    <p class="mtext-111 subtitle font-weight-bold">
                        "Technology through the era"
                    </p>
                    <div class=" p-t-45">

                        <div class="d-flex  flex-button">
                            <a href="#about" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04 mr-3">
                                About
                            </a>
                            <?php if (!isset($session['email'])) : ?>
                                <a href="<?= base_url('register') ?>" class="btn mtext-110 cl1 size-118  hov-btn5 bg10 bor20 p-lr-5 trans-04">
                                    Join Us
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row ">
                <div class="col-lg">
                    <h1 class=" bigtitle font-weight-bold ltext-105">About</h1>
                    <h2 class="mb-4 subtitle2 font-weight-bold">Technology Festival</h2>
                    <p class=" subtitle2">
                        Techphoria merupakan serangkaian acara IT tahunan tingkat
                        nasional dengan fokus utama kompetisi yang diperuntukan bagi
                        Universitas/Politeknik se-Indonesia untuk meningkatkan kesadaran
                        tentang peranan IT serta meningkatkan nilai keilmuan dan
                        komprehensif di bidang ilmu teknologi informasi komputer, ajang
                        ini sendiri diprakarsai oleh Mahasiswa Fakultas Ilmu Komputer
                        Universitas Sriwijaya.
                    </p>
                </div>
                <div class="col-lg m-t-130  big">
                    <div class="container block2-pic hov-img1 d-flex justify-content-center">
                        <img src="<?= base_url('asset/logo/logo-technofest.png') ?>" alt="IMG-LOGO" class="m-all-40" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-t-70" id="competition">
        <div class="container">
            <div class="mb-2">
                <div class="text-center">
                    <h1 class=" font-weight-bold ltext-105 mt-3">Competition</h1>
                    <p class="mt-3">
                        Dalam Technology Euphoria ini, terdapat beberapa lomba yang
                        diadakan seperti dibawah ini.
                    </p>
                    <p>
                        Ayo daftarkan tim anda dalam kompetisi dan menangkan hadiahnya
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-lg-4 mt-5">
                    <div class="d-flex justify-content-center hov-img2">
                        <a href="<?= base_url('competition/bisplan') ?>">
                            <img src=" <?= base_url('asset/logo/logo-business-plan.png') ?>" alt="IMG-LOGO" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-5">
                    <div class="d-flex justify-content-center hov-img2">
                        <a href="<?= base_url('competition/debate') ?>">
                            <img src=" <?= base_url('asset/logo/logo-debate.png') ?>" alt="IMG-LOGO" />
                        </a>

                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-5">
                    <div class="d-flex justify-content-center hov-img2">
                        <a href="<?= base_url('competition/essay') ?>">
                            <img src=" <?= base_url('asset/logo/logo-essay.png') ?>" alt="IMG-LOGO" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5 p-t-70" id="seminar">
        <div class="container">
            <div class="mb-5">
                <div class="text-center">
                    <h1 class=" font-weight-bold ltext-105 mt-3">Seminar</h1>
                    <p>Seminar Technology Festival 2020</p>
                    <h1 class=" ltext-203 m-tb-100">Coming Soon</h1>
                    <!-- Load more -->
                    <div class="flex-c-m flex-w w-full p-t-45">

                    </div>
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


            <div class="row">
                <div class="col col-lg-4 m-t-50">
                    <h1 class="text-center ltext-204"> Bussines Plan</h1>
                    <div class="row m-b-50">

                        <div class="col-6  ">
                            <div class="d-flex justify-content-center">
                                <img src=" <?= base_url('asset/logo/logo-wa.png') ?>" alt="IMG-LOGO-WA" />
                            </div>
                            <h5 class="text-center ltext-205">Whatsapp Number</h5>
                            <p class="text-center ltext-206"> Widya Rohadatul Ais’sy </p>
                            <p class="text-center stext-113 font-weight-bold"> 0822-7820-1468 </p>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center ">
                                <img src=" <?= base_url('asset/logo/logo-line.png') ?>" alt="IMG-LOGO-LINE" />
                            </div>
                            <h5 class="text-center ltext-205">Line Id</h5>
                            <p class="text-center ltext-206"> M Hafizh Permana </p>
                            <p class="text-center  stext-113 font-weight-bold"> @hafizpermana </p>
                        </div>
                    </div>

                </div>
                <div class="col col-lg-4  m-t-50">
                    <h1 class="text-center ltext-204"> Debate Competition</h1>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center ">
                                <img src=" <?= base_url('asset/logo/logo-wa.png') ?>" alt="IMG-LOGO-WA" />
                            </div>
                            <h5 class="text-center ltext-205">Whatsapp Number</h5>
                            <p class="text-center ltext-206"> Nurulia Muliasari </p>
                            <p class="text-center stext-113 font-weight-bold "> 0897-3092-645 </p>
                        </div>
                        <div class="col-6 ">
                            <div class="d-flex justify-content-center">
                                <img src=" <?= base_url('asset/logo/logo-line.png') ?>" alt="IMG-LOGO-LINE" />
                            </div>
                            <h5 class="text-center ltext-205">Line Id</h5>
                            <p class="text-center ltext-206"> Arif Tumpal Leonardo </p>
                            <p class="text-center  stext-113 font-weight-bold"> @arifn_11 </p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4  m-t-50">
                    <h1 class="text-center ltext-204"> Essay Competition</h1>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center">
                                <img src=" <?= base_url('asset/logo/logo-wa.png') ?>" alt="IMG-LOGO-WA" />
                            </div>
                            <h5 class="text-center ltext-205">Whatsapp Number</h5>
                            <p class="text-center ltext-206"> Icha Dwi Marsella </p>
                            <p class="text-center  stext-113 font-weight-bold"> 0858-0968-5369 </p>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center ">
                                <img src=" <?= base_url('asset/logo/logo-line.png ') ?>" alt="IMG-LOGO-LINE" />
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
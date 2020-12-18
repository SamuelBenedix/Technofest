<?php $this->load->view('template/head'); ?>

<body class="animsition grunge">
    <!-- Header -->
    <?php $this->load->view('template/header'); ?>


    <section id="home">
        <div class="container contitle">
            <div class="row">
                <div class="col-lg">
                    <div class="container hoverlogo block2-pic hov-img1 d-flex justify-content-center">
                        <img src="<?= base_url('asset/logo/logo-business-plan.png') ?>" alt="IMG-LOGO" class="logos m-all-30" />
                    </div>
                </div>
                <div class="col-lg">

                    <h1 class=" mb-2 font-weight-bold ltext-105 competitle">Bussiness Plan </h1>
                    <p class="mb-3 stext-100"> Business Plan Competition merupakan salah satu kompetisi bisnis berskala nasional dalam ajang Technology Festival 2020 yang ditujukan untuk siswa SMA/SMK hingga Mahasiswa D3 dan S1. Kompetisi ini bertujuan untuk menumbuhkan jiwa wirausaha yang kompetitif dan inovatif pada generasi muda di era industri digital. National Business Plan Competition kali ini mengusung tema yang berkaitan dengan berwirausaha di era industri digital yaitu <b>"Membangun Peluang Industri Kreatif Dalam Menunjang Efektifitas Digital Ditengah Pandemi Covid"</b> </p>


                    <ul class="mt-3">
                        <li class="mtext-114">
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pendaftaran Online</div>
                                <div class="col-12 col-sm">14 September - 14 Oktober 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Babak Penyisihan </div>
                                <div class="col-12 col-sm">7 November - 13 November 2020 </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengumuman Finalis</div>
                                <div class="col-12 col-sm">14 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Konfirmasi Ulang Finalis </div>
                                <div class="col-12 col-sm">16 November - 18 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Tahap Akhir Atau Final </div>
                                <div class="col-12 col-sm">21 November 2020</div>
                            </div>
                            <div class="row my-2">
                                <div class="col-12 col-sm font-weight-bold">Pengumuman Pemenang Lomba</div>
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
                                <a href="<?= base_url('competition?type=bisplan') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
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
                    <a href="<?= base_url('download?data=bisnisplan') ?>" class="btn mtext-110 cl0 size-118  hov-btn3 bg1 bor20 p-lr-5 trans-04">
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
                    <div class="font-weight-bold"> Bagaimana cara mendaftarkan diri dalam Kompetisi Online Debate Competition Technofest 2020 ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Peserta telah mengikuti prosedur pendaftaran website resmi Technofest2020 (http://...........) dan melengkapi data pendaftaran dengan benar. Peserta yang tidak memenuhi persyaratan pendaftaran sampai waktu yang ditentukan akan dinyatakan gugur</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Bagaimana prosedur pengunggahan data pribadi setiap peserta ? </div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Prosedur pengunggahan data diwakilkan oleh ketua tim dengan melampirkan foto/ scan bukti pembayaran don foto/ scan Kartu Tanda Mahasiswa.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Bolehkah tim saya mendaftar jika berasal dari jenjang pendidikan yang berbeda ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> (seperti D3 dan Sl dalam satu tim) maupun dari jurusan yang berbeda? Diperbolehkan, dengan syarat dalam satu tim tidak terdiri dari peserta dengan sekolah atau universitas yang berbeda.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Bagaimana saya bisa mendapatkan template untuk proposal?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i>Template proposal dapat diunduh pada website Technology Festival 2020. (http://...........)</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Apakah karya yang pernah diikutsertakan dalam kompetisi lain dapat diikutsertakan kembali?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Dapat diikutsertakan dengan syarat Karya bisnis yang diajukan merupakan murni ide bisnis atau sudah dijalankan tapi belum pernah menjuarai kompetisi manapun. Dengan syarat harus mencantumkan tahun berdiri, lokasi usaha dan inovasi yang ditambahkan.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Bagaimana jika tim saya hanya terdiri dari dua orang untuk mengikuti kompetisi ini? </div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Selama peserta tidak melebihi 3 orang dalam satu tim tidak melanggar syarat dan ketentuan yang berlaku.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold">B olehkah seorang peserta menjadi anggota dari beberapa tim di kompetisi Business Plan? </div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i>Sesuai dengan syarat dan ketentuan yang dibuat bahwa peserta tidak diperbolehkan mengikuti kompetisi Business Plan lebih dari satu.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Apakah diperbolehkan peserta Business Plan mendaftar pada cabang kompetisi lain di Technology Festival 2020? </div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Diperbolehkan, tetapi jika sudah menjadi ketua pada kompetisi ini hanya boleh menjadi anggota pada kompetisi yang lain</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Bagaimana sistem kompetisi Business Plan Technology Festival 2020?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Pada kompetisi ini terdapat dua babak, yakni babak penyisihan berupa pengumpulan proposal dan babak final yang akan dilaksanakan secara daring/online.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Jika tim saya lolos babak penyisihan apakah karya saya boleh diubah ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Tidak boleh.</p>
                </li>
                <li class="my-2">
                    <div class="font-weight-bold"> Apakah bisnis yang diajukan harus bisnis yang sudah berjalan ?</div>
                    <p> <i class="fas fa-long-arrow-alt-right"></i> Tidak. Bisnis yang belum berjalan, diperbolehkan untuk mengikuti kompetisi ini. tetapi apabila bisnis tersebut sudah berjalan, peserta harus menyertakan tahun berdiri, lokasi usaha dan menyebutkan inovasi terbaru yang ditambahkan pada bisnis tersebut.</p>
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
                    <h1 class="text-center ltext-204"> Bussines Plan</h1>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-center ">
                                <img src="<?= base_url('asset/logo/logo-wa.png') ?>" alt="IMG-LOGO-WA" />
                            </div>
                            <h5 class="text-center ltext-205">Whatsapp Number</h5>
                            <p class="text-center ltext-206"> Widya Rohadatul Ais’sy </p>
                            <p class="text-center stext-113 font-weight-bold"> 0822-7820-1468 </p>
                        </div>
                        <div class="col-6 ">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('asset/logo/logo-line.png') ?>" alt="IMG-LOGO-LINE" />
                            </div>
                            <h5 class="text-center ltext-205">Line Id</h5>
                            <p class="text-center ltext-206"> M Hafizh Permana </p>
                            <p class="text-center  stext-113 font-weight-bold"> @hafizpermana </p>
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
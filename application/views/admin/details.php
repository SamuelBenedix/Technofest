<?php $this->load->view('templateadmin/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('templateadmin/sidebar'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('templateadmin/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Details Team</h1>
                    <div class="card">
                        <div class="card-header">
                            Data Tim
                        </div>
                        <div class="card-body">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold"> Nama Tim</td>
                                        <td> <?= $team ?></td>
                                    </tr>
                                    <tr>

                                        <td class="font-weight-bold">Asal Universitar/Sekolah</td>
                                        <td> <?= $asal ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Kontak Wa/No Telepon</td>
                                        <td> <?= $telepon ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Email </td>
                                        <td> <?= $email ?></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Cabang Lomba</td>
                                        <td> <?= $lomba ?></td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>

                    <div class="row mt-3">
                        <?php foreach ($anggota as $ang) : ?>
                            <div class="col">
                                <div class="card">
                                    <?php if ($ang->st_anggota == 1) : ?>
                                        <div class="card-header">
                                            Ketua Tim
                                        </div>
                                    <?php else : ?>
                                        <div class="card-header">
                                            Anggota Tim
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="font-weight-bold"> Nama</td>
                                                    <td> <?= $ang->nama ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Asal </td>
                                                    <td><?= $ang->asal ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Nim/NISN </td>
                                                    <td><?= $ang->nim ?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('templateadmin/footer'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('templateadmin/logout'); ?>

    <?php $this->load->view('templateadmin/script'); ?>
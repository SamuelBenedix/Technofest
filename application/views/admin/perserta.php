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
                    <h1 class="h3 mb-2 text-gray-800"> Perserta</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Team</th>
                                            <th>Jenis Lomba</th>
                                            <th>Nama Ketua</th>
                                            <th>Status</th>
                                            <th>Asal Sekolah/Kampus</th>
                                            <th>Jumlah Anggota</th>
                                            <th>Pemgaturan</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php foreach ($anggota as $ang) : ?>
                                            <tr>
                                                <td>
                                                    <?= $ang->id_team ?>
                                                </td>
                                                <td>
                                                    <?= $ang->lomba ?>
                                                </td>
                                                <td>
                                                    <?= $ang->nama ?>
                                                </td>
                                                <td>
                                                    <?= $ang->status ?>
                                                </td>
                                                <td>
                                                    <?= $ang->asal ?>
                                                </td>
                                                <td>
                                                    <?= $ang->anggota ?>
                                                </td>
                                                <td class="text-center" width="160px">
                                                    <?= anchor('admin/perserta/details?team=' .  $ang->id_team, '<div class="btn btn-primary btn-sm">
                                         <i class="fas fa-search-plus"></i></div>') ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
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
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
                    <h1 class="h3 mb-2 text-gray-800"> Akun Perserta</h1>
                    <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <button type="button" class="btn btn-primary btn-icon-split btnadd float-right" data-toggle="modal" data-target="#staticBackdrop">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add New</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>nama</th>
                                            <th>active</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($akun as $akn) : ?>
                                            <tr>
                                                <td>
                                                    <?= $akn->email ?>
                                                </td>
                                                <td>
                                                    <?= $akn->nama ?>
                                                </td>
                                                <td>
                                                    <?php if ($akn->active == 1) : ?>
                                                        <span class="badge badge-pill badge-success">Akun Active </span>
                                                    <?php else : ?>
                                                        <span class="badge badge-pill badge-danger">Akun tidak active </span>
                                                    <?php endif; ?>
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



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modallabel" id="staticBackdropLabel">Form Tambah Akun Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="<?= base_url() . 'Admin/location/add_location'; ?>" method="post">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="Input">Email</label>
                                    <input name="id" type="hidden" class="form-control" id="id">
                                    <input name="email" type="email" class="form-control" id="Input">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="Input">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="Input">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="Input">Password</label>
                                    <input name="password" type="password" class="form-control" id="Input">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="Input">Password Konfirmasi</label>
                                    <input name="password2" type="password" class="form-control" id="Input">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="btntambah">Save</button>
                                <button type="submit" class="btn btn-primary" id="btnubah">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {

            const base = "<?= base_url() ?>";
            const name = "Akun Admin";
            const url = "admin/login";

            $('.btnadd').on('click', function() {
                $('.modallabel').html('Input Data ' + name);
                $('#btntambah').show();
                $('#btnubah').hide();
                $('[name = "email"]').val('');
                $('[name = "password"]').val('');
                $('[name = "password2"]').val('');
                $('[name = "nama"]').val('');

                const direct = url + "/addItems";
                $('.modal-body form').attr('action', base + direct);
            });

        });
    </script>

    <?php $this->load->view('templateadmin/script'); ?>
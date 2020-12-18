<?php $this->load->view('template/head'); ?>


<body class="animsition grunge">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5 m-b-60">
                <div class="card bg8 o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-2 mx-auto">
                                        <a>
                                            <img style="max-width: 220px" src="<?= base_url('asset/logo/logo-technofest.png') ?>" alt="logo" class="mb-5" /></a>
                                    </div>
                                    <h1 class=" mtext-107 d-block text-center">
                                        ADMIN
                                    </h1>

                                    <?= $this->session->flashdata('message') ?>
                                    <form class="user" method="post" action="<?= base_url('admin/login') ?>">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email') ?>" />
                                            <?= form_error('email', '<small class ="text-danger pl-3">', '</small'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" />
                                            <?= form_error('password', '<small class ="text-danger pl-3">', '</small'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-user p-lr-5 trans-04 cl0 hov-btn3 bor21 bg1 btn-block">
                                            Login
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('template/script'); ?>
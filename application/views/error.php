<?php $this->load->view('template/head'); ?>

<body class="animsition  ">
    <div class="container-fluid  m-t-150">

        <!-- 404 Error Text -->
        <div class="text-center ">
            <div class="error mx-auto " data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="<?= base_url() ?>">&larr; Back to Home</a>
        </div>

    </div>

    <?php $this->load->view('template/script'); ?>
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                <!-- Logo desktop -->
                <a href="<?= base_url() ?>" class="logo">
                    <img src=" <?= base_url('asset/logo/logo-miring-black.png') ?>" alt="IMG-LOGO" />
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="#home">Home </a>
                        </li>

                        <li>
                            <?php if (isset($set)) : ?>
                                <a href="#about">About</a>
                            <?php else : ?>
                                <a href="<?= base_url('home#about') ?>">About</a>
                            <?php endif; ?>

                        </li>

                        <li>
                            <?php if (isset($set)) : ?>
                                <a href="#competition">Competition</a>
                            <?php else : ?>
                                <a href="<?= base_url('home#competition') ?>">Competition</a>
                            <?php endif; ?>
                        </li>

                        <li>
                            <?php if (isset($set)) : ?>
                                <a href="#seminar">Seminar</a>
                            <?php else : ?>
                                <a href="<?= base_url('home#seminar') ?>">Seminar</a>
                            <?php endif; ?>
                        </li>

                        <li>

                            <a href="#contact">Contact</a>
                        </li>

                        <?php if (isset($session['email'])) : ?>
                            <li>
                                <a href="<?= base_url('competition/team') ?>">Team</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">

                    <?php if (!isset($session['email'])) : ?>

                        <a href=" <?= base_url('login') ?>" class=" btn stext-112 cl1 size-126 hov-btn5 bg10 bor20 p-lr-5 mr-2  trans-04" role="button">
                            Login
                        </a>
                        <a href=" <?= base_url('register') ?>" class="btn stext-112 cl0 size-126 bg1  hov-btn3 bor20 p-lr-5  trans-04 " role="button">
                            Daftar
                        </a>
                    <?php else : ?>
                        <a class="nav-link dropdown-toggle cl1 hov-cl1" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600  font-weigth-bold"><?= $session['email'] ?></span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="<?= base_url('asset/logo/logo-miring-black.png') ?>" alt="IMG-LOGO" /></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15"></div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="#home">Home</a>

            </li>

            <li>
                <a href="#about">About</a>
            </li>

            <li>
                <a href="#competition">Competition</a>
            </li>

            <li>
                <a href="#seminar">Seminar</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>

            <li>
                <div class="container">
                    <div class="wrap-icon-header flex-w flex-r-m">

                        <?php if ($session['email']) : ?>
                            Selamat Datang, <b class="ml-2"><?= $session['email'] ?></b>
                        <?php else : ?>
                            <div class="row">
                                <div class="col">
                                    <a href=" <?= base_url('login') ?>" class="btn stext-112 c1 size-126 bg6 btn-block hov-btn6   trans-04 " role="button">
                                        Login
                                    </a>
                                </div>
                                <div class="col">
                                    <a href=" <?= base_url('register') ?>" class="btn stext-112 c1 size-126 bg6 btn-block hov-btn6   trans-04 " role="button">
                                        daftar
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>


            </li>
        </ul>
    </div>
</header>
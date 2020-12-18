<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">

        <div class="sidebar-brand-text mx-3">HIMASISKO</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/perserta') ?>">
            <i class="fas fa-user-friends"></i>
            <span>Perserta</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/akun') ?>">
            <i class="fas fa-user-lock"></i>
            <span>Akun</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/akun/perserta') ?>">
            <i class="fas fa-user-shield"></i>
            <span>Akun Perserta</span></a>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-credit-card"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kasirku App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Data Master -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang.index') }}">
            <i class="fa fa-shopping-cart"></i>
            <span>Data Produk</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-user"></i>
            <span>Data User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi
    </div>

    <!-- Nav Item - Transaksi -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-cart-plus"></i>
            <span>Input Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-calendar"></i>
            <span>Data Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Toko Buku</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
  <li class="nav-item @yield('active-dashboard')">
      <a class="nav-link" href="{{('/admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <!-- Nav Item - product -->
    <li class="nav-item @yield('active-product')">
      <a class="nav-link" href="{{url('/produk')}}">
        <i class="fa fa-book"></i>
        <span>Produk</span></a>
    </li>
    <!-- Nav Item - transaksi -->
    <li class="nav-item @yield('active-transaction')">
      <a class="nav-link" href="/transaksi">
        <i class="fas fa-dolly-flatbed    "></i>
        <span>Transaksi</span></a>
    </li>

    

  </ul>
  <!-- End of Sidebar -->
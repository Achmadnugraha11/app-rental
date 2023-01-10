<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
<!-- Sidebar -->
<ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-car"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MB Rent Car</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/dashboard');?>">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/data_type');?>">
         <i class="fas fa-grip-horizontal"></i>
         <span>Data Type</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/data_mobil');?>">
         <i class="fas fa-car"></i>
         <span>Data Mobil</span>
      </a>
   </li>
   
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/data_customer');?>">
         <i class="fas fa-users"></i>
         <span>Data Customer</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/transaksi');?>">
         <i class="fas fa-random"></i>
         <span>Transaksi</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/laporan');?>">
         <i class="fas fa-clipboard-list"></i>
         <span>Laporan</span>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout');?>">
         <i class="fas fa-sign-out-alt"></i>
         <span >Logout</span>
      </a>
   </li>
   <!-- <li class="nav-item">
   <a class="nav-link" href="<?= base_url('auth/ganti_password');?>">
      <span >Ganti password</span>
   </a>
   </li> -->



   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
<!-- End of Sidebar -->
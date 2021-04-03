<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-motorcycle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E - Parking</div>
      </a>

      

      <?php if ($user_data['role_id'] == 1): ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading mb-1">
          Menu Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link py-0 mt-3" href="<?= BASE_URL('Admin/index'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>   

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL('Admin/user'); ?>">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Kelola Petugas</span></a>
      </li>       

      <?php endif; ?>
      
  
      <hr class="sidebar-divider">

      <div class="sidebar-heading mb-1">
          Data Kendaraan Masuk
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link py-0 mt-3" href="<?= BASE_URL('Data/index'); ?>">
          <i class="fas fa-fw fa-motorcycle"></i>
          <span>Data Motor</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL('Data/Mobil'); ?>">
          <i class="fas fa-fw fa-car"></i>
          <span>Data Mobil</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <div class="sidebar-heading mb-1">
          Menu Petugas
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link py-0 mt-3" href="<?= BASE_URL('Petugas/index'); ?>">
          <i class="fas fa-fw fa-road"></i>
          <span>Info Parkir</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL('Petugas/input'); ?>">
          <i class="fas fa-fw fa-keyboard"></i>
          <span>Input Parkir</span></a>
      </li>      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item mb-3">
        <a class="nav-link py-0" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
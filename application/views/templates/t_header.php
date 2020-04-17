<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.css'); ?>" />

  <!-- fontawesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.css'); ?>">

  <!-- jQuery js -->
  <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.js'); ?>"></script>

  <!-- Data tables -->
  <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

  <!-- Chart .js -->
  <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/chart.js/Chart.js'); ?>"></script>


  <title>ระบบสมาชิก</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php
    if ((get_cookie('authen') !== null)) {
    ?>
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <div class="pointer" id="sidebarToggleTop">
          <div id="brandSidebar" class="sidebar-brand d-flex align-items-center justify-content-center " href="<?php echo base_url() ?>">
            <div class="sidebar-brand-icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="sidebar-brand-text mx-3 ">ระบบสมาชิก</div>
          </div>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Register -->
        <li class="nav-item">

          <a class="nav-link" href="<?php echo base_url('Register/show') ?>">
            <i class="fas fa-user-plus"></i>
            <span>สมัครสมาชิก</span></a>

          <!-- Nav Item - manage member -->
          <a class="nav-link" href="<?php echo base_url('Management/show') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>จัดการสมาชิก</span></a>

          <a class="nav-link" href="index.html">
            <i class="fas fa-file-export"></i>
            <span>ส่งออกรายงาน</span></a>


        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline mt-auto">
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <!-- Nav Item - logout -->
          <li class="nav-item">

            <a class="nav-link" href="<?php echo base_url('Authen/logout') ?>">
              <i class="fas fa-sign-out-alt"></i>
              <span>ออกจากระบบ</span></a>

          </li>
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


      </ul>
      <!-- End of Sidebar -->
    <?php
    }
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fas fa-bars"></i>
          </button>


          <?php
          if ((get_cookie('authen') === null)) {
          ?>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav mr-auto">
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 medium">
                    ระบบสมาชิก
                  </span>
                </a>
              </li>
              <div class="topbar-divider d-none d-sm-block"></div>

            </ul>
          <?php
          }
          ?>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php if ((get_cookie('authen') !== null)) { ?>
                    ผู้ดูแลระบบ
                  <?php } else { ?>
                    ยังไม่ได้เข้าสู่ระบบ
                  <?php } ?>
                </span>
                <i class="far fa-user"></i>
              </a>
              <?php
              if ((get_cookie('authen') !== null)) {
              ?>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('Authen/logout'); ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    ออกจากระบบ
                  </a>
                  <div class="dropdown-divider"></div>
                </div>
              <?php } ?>
            </li>
          </ul>

        </nav>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- End of Topbar -->
          <!-- start script -->
          <script>

          </script>
          <!-- end script -->
          <!-- start style -->
          <style>
            .pointer {
              cursor: pointer;
            }
          </style>
          <!-- end style -->
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
  <script src="<?php echo base_url('assets/jquery-3.5.0.min.js'); ?>"></script>

  <!-- Data tables -->
  <script src="<?php echo base_url('assets/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>


  <title>ระบบจัดการสมาชิก</title>
</head>

<body>

  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">ระบบจัดการสมาชิก</a>
    <form class="form-inline">
      <?php
      if ((get_cookie('authen') === null) && empty($is_login)) {
      ?>
        <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary my-2 my-sm-0" type="submit">เข้าสู่ระบบ</a>
        <?php
      } else {
        if (empty($is_login)) {
        ?>
          <a href="<?php echo base_url('Authen/logout'); ?>" class="btn btn-outline-danger my-2 my-sm-0" type="submit">ออกจากระบบ</a>
      <?php
        }
      }
      ?>
    </form>
  </nav>
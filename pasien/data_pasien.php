<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav style="display: flex;justify-content: space-between;" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
         <select style="border: none; color: grey; margin-top: 9px; width: 80px;">
           <option value="">Contact</option>
           <option value="" style=" color: black;">+627782419615 (Marshall)</option>
           <option value="" style=" color: black;">+628643215996 (Rayne)</option>
         </select>
        </li>
      </ul>
  </div>

    <!-- Right navbar links -->
    <div style="display: flex; justify-content:end;">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link" style="color: blue;">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <select style="border: none; color: blue; margin-top: 9px; width: 100px; margin-right: 10px;">
           <option value="">Languages</option>
           <option value="" style=" color: black;">Bahasa Indonesia</option>
           <option value="" style=" color: black;">English</option>
           <option value="" style=" color: black;">Espanol</option>
         </select>
      </li>
    </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="logo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Marshall Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="puskesmas.png" class="img-circle elevation-2" alt="User Image" style="margin-top: 4px;">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="font-size: x-large;">Puskesmas </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sejarah
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_pasien.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="margin-left: 10px;"><b>Daftar Pasien</b> <i class="right fas fa-angle-right"></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_paramedik.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="margin-left: 10px;"><b>Daftar Paramedik</b> <i class="right fas fa-angle-right"></i></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_periksa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="margin-left: 10px;"><b>Daftar Periksa </b> <i class="right fas fa-angle-right"></i></p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
<div class="content-wrapper">
<h2 style="color: darkorange; text-shadow: black 1px 1px 1px; text-align: center; padding-top: 10px;">Data Pasien</h2>
<?php

// 1. sertakan koneksi database
require_once 'dbkoneksi.php';
// 2. definisikan query
$sql = "SELECT * FROM pasien";
// 3. jalankan query
$query = $dbh->query($sql); 
// 4. tampilkan hasil query

?>

<table class="table table-bordered" style="margin-top: 20px; background-color: azure;">
    <thead><tr><th width="50">No</th><th>Kode</th><th>Nama Pasien</th>
    <th>Alamat</th><th width="400">Email</th><th>Action</th></tr>
<tbody>

   <?php
   $nomor = 1;
   foreach ($query as $row) {
      echo "<tr><td>" . $nomor . "</td><td>" . $row['kode'],
      "</td><td>" . $row['nama'] . "</td><td>" . $row['alamat'],
      "</td><td>" . $row['email'] . "</td>"; // Output kolom data

      // Tambah hyperlink Edit dan Delete dengan mengirimkan id pasien
      echo "<td><a href='edit_data.php?id=" . $row['id'] . "'>Edit |</a>
      <a href='delete_pasien.php?id=" . $row['id'] . "'>Delete</a> </td>";

      echo "</tr>";
      $nomor++;
    }
?>

</tbody>
</table>
</div>


  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>
    <!-- /.content-header -->
    <!-- /.content -->
  </div>
  
  
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
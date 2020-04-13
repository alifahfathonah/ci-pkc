<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title><?= TITLE ?></title>

   <link rel="shortcut icon" href="<?= base_url('asset/favicon.png') ?>" type="image/x-icon">

   <!-- Custom fonts for this template-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.0.7/css/sb-admin-2.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.9/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
               <img src="<?= optimage(base_url('asset/favicon.png')) ?>" width="40">
            </div>
            <div class="sidebar-brand-text mx-3">
               <?php
               if ($this->session->userdata('level_user') == 1) {
                  echo 'Administrator Web';
               } else if ($this->session->userdata('level_user') == 2) {
                  echo TITLE;
               } else if ($this->session->userdata('level_user') == 3) {
                  echo 'PC PMII <br> Se-KALTIMRA';
               }
               ?>
            </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <?php
         if ($this->session->userdata('level_user') == 2) {
            $this->load->view('layout/menu_korcab');
         } else if ($this->session->userdata('level_user') == 3) {
            $this->load->view('layout/menu_cabang');
         }
         ?>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar date -->
               <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search text-dark">
                  <div class="font-weight-light h4">
                     <span class="badge badge-primary badge-pill">
                        <i class="zmdi zmdi-calendar"></i>&nbsp;
                        <?= tanggal(date('Y-m-d'), TRUE) ?>
                     </span>
                  </div>
               </div>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link text-dark" href="<?= site_url('/') ?>" target="_blank">
                        <i class="zmdi zmdi-navigation"></i>&nbsp;
                        Kunjungi website
                     </a>
                  </li>
                  <div class="topbar-divider d-none d-sm-block"></div>
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                           <?= $this->session->userdata('name_user') ?>
                        </span>
                        <img class="img-profile rounded-circle" src="<?= optimage(base_url('asset/favicon.png')) ?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= site_url('atur-profil/' . $this->session->userdata('id_user')) ?>">
                           <i class=" zmdi zmdi-account"></i>&nbsp;
                           Atur Profil
                        </a>
                        <a class="dropdown-item" href="<?= site_url('ubah-password/' . $this->session->userdata('id_user')) ?>">
                           <i class="zmdi zmdi-key"></i>&nbsp;
                           Ubah Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" onclick="logout()">
                           <i class="zmdi zmdi-run"></i>&nbsp;
                           Keluar
                        </a>
                     </div>
                  </li>

               </ul>

            </nav>
            <!-- End of Topbar -->
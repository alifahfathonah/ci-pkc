<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?php echo base_url('asset/favicon.png') ?>" type="image/x-icon">

    <title><?php echo TITLE_BAR ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- dataTables -->
    <link href="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('asset/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset/dist/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administrator Website</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('name_user') ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo site_url('admin/profil_edit') ?>"><i class="fa fa-cog fa-fw"></i> Pengaturan</a>
                        </li>
                        <li class="divider"></li>
                        <li><a data-toggle="modal" data-target="#modal-logout""><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        </li>
                        <li>
                            <a href="<?php echo site_url('artikel') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Artikel</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('galeri') ?>"><i class="fa fa-picture-o fa-fw"></i> Galeri</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('pengurus') ?>"><i class="fa fa-table fa-fw"></i> Pengurus</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('subscribe') ?>"><i class="fa fa-at fa-fw"></i> Subscribe</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('kontak') ?>"><i class="fa  fa-envelope fa-fw"></i> Kontak</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('informasi') ?>"><i class="fa fa-exclamation-triangle fa-fw"></i> Informasi</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('welcome') ?>" target="_blank"><i class="fa fa-send fa-fw"></i> Kunjungi Web</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- content page web -->

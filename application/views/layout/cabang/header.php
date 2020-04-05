<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo TITLE_BAR ?></title>

    <link rel="shortcut icon" href="<?php echo base_url('asset/favicon.png') ?>" type="image/x-icon">

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
                <a class="navbar-brand" href="#">PC PMII <?php echo $nama_cabang->nama_cabang ?></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('name_user') ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo site_url('cabang/profil_edit/'.$this->session->userdata('cabang_id')) ?>"><i class="fa fa-cog fa-fw"></i> Profil Cabang</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('cabang/pengaturan_edit/'.$this->session->userdata('id_user')) ?>"><i class="fa fa-cogs fa-fw"></i> Pengaturan</a>
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
                            <li><a href="<?php echo site_url('cabang') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        </li>
                        <li>
                            <a href="<?php echo site_url('komisariat') ?>"><i class="fa fa-university fa-fw"></i> Komisariat</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('rayon') ?>"><i class="fa fa-graduation-cap fa-fw"></i> Rayon</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('anggota') ?>"><i class="fa fa-users fa-fw"></i> Anggota</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('kopri') ?>"><i class="fa fa-female fa-fw"></i> Kopri</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('alumni') ?>"><i class="fa fa-briefcase fa-fw"></i> Alumni</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- content page web -->

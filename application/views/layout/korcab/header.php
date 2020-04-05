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

    <style>
        .box{position: relative;}
        .card{ width: 501.732pt; height: 147.402pt; }
        .kode{ 
            position: absolute; 
            top: 110pt; 
            left: 10pt; 
            color: #fff;
            font-size: 15pt;
        }
    </style>
    
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
                <a class="navbar-brand" href="#">PKC PMII KALTIM-RA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('name_user') ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo site_url('korcab/profil_edit/'.$this->session->userdata('id_user')) ?>"><i class="fa fa-cog fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a data-toggle="modal" data-target="#modal-logout""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <li><a href="<?php echo site_url('korcab') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-map fa-fw"></i> Cabang <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- daftar diambil dari parsing data setiap controller -->
                                <?php 
                                    foreach ($header_cabang as $cabang) {
                                        if ($cabang->nama_cabang != "Bukan Cabang") {
                                ?>
                                <li><a href="<?php echo site_url('korcab/cabang/'.$cabang->id_cabang) ?>"><i class="fa fa-angle-right"></i> <?php echo $cabang->nama_cabang ?></a></li>
                                <?php
                                        }
                                    }
                                ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('korcab/komisariat') ?>"><i class="fa fa-university fa-fw"></i> Komisariat</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('korcab/rayon') ?>"><i class="fa fa-graduation-cap fa-fw"></i> Rayon</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('korcab/anggota') ?>"><i class="fa fa-child fa-fw"></i> Anggota</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('korcab/kopri') ?>"><i class="fa fa-female fa-fw"></i> Kopri</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('korcab/alumni') ?>"><i class="fa fa-briefcase fa-fw"></i> Alumni</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('user') ?>"><i class="fa fa-users fa-fw"></i> User</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- content page web -->
        
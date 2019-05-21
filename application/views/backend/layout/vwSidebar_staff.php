<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/lib/datatable/dataTables.bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/icons.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/scss/style.css">
   <link href="<?php echo base_url();?>assets/dashboard/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
<!--
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="<?php echo base_url();?>assets/dashboard/js/vendor/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/plugin.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/lib/data-table/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/lib/data-table/datatables-init.js"></script>


</head>
<body>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo site_url('/dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Master Data</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-alt"></i>Berita</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-folder"></i><a href="<?php echo site_url('staff/berita'); ?>">Data Berita</a></li>
                        <li><i class="fa fa-plus"></i><a href="<?php echo base_url('staff/tambah_berita');?>">Tambah Berita</a></li>
                        <li><i class="fa fa-bars"></i><a href="<?php echo site_url('staff/kategori_berita'); ?>">Kategori Berita</a></li>

                    </ul>
                </li>

                <!--video-->
                <!-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-video-camera"></i>Videos</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-folder"></i><a href="ui-buttons.html">Data Video</a></li>
                        <li><i class="fa fa-plus"></i><a href="ui-badges.html">Tambah Video</a></li>

                    </ul>
                </li> -->


                <!--LIST KOMENTAR-->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Komentar</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="<?= base_url('staff/listcomment')?>">List Komentar</a></li>
                    </ul>
                </li>

                <!--VISITOR-->
                <!-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Visitor</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="<?= base_url('staff/visitorberita')?>">Visitor Berita</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="<?= base_url('staff/visitorweb')?>">Visitor Website</a></li>
                    </ul>
                </li> -->

                <h3 class="menu-title">Konfigurasi</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-user"></i><a href="<?php echo base_url('staff/viewProfile')?>">Ubah Username/Password</a></li>
                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

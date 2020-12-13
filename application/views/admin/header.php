<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Aplikasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/home.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.datatables.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <a style="color: white;" class="navbar-brand" href="<?php echo base_url().'admin'; ?>"Perpustakaan><span style="color: white; width: 30px;" class="glyphicon glyphicon-education"></span> E-Library </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1" style="float: right;">
          <ul class="nav navbar-nav">
            <li ><a href="<?php echo base_url().'admin'; ?>"><span class="glyphicon glyphicon-home"></span> <!--Dashboard--><span class="sronly"></span></a></li>
            <li><a href="<?php echo base_url().'admin/buku'; ?>"><span class="glyphicon glyphicon-book"></span> <!--Data Buku--></a></li>
            <li><a href="<?php echo base_url().'admin/anggota'; ?>"><span class="glyphicon glyphicon-user"></span> <!--Data Anggota--></a></li>
            <li><a href="<?php echo base_url().'admin/peminjaman'; ?>"><span class="glyphicon glyphicon-sort"></span> <!--Transaksi Peminjaman--></a></li>
            <li class="dropdown"><a href="<?php echo base_url().'#'; ?>" class="dropdown-toggle"
              data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false">
              <span class="glyphicon glyphicon-list-alt"></span><!-- Laporan--><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url().'admin/cetak_laporan_buku' ?>">
              <i class="glyphicon glyphicon-lock"></i>Laporan Data Buku</a></li>
             <li><a href="<?php echo base_url().'admin/cetak_laporan_anggota' ?>">
              <i class="glyphicon glyphicon-lock"></i>Laporan Data Anggota</a></li>
             <li><a href="<?php echo base_url().'admin/laporan_transaksi' ?>">
              <i class="glyphicon glyphicon-lock"></i>Laporan Data Transaksi</a></li>
            </ul>
          </li>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false"><?php echo "Halo,<b>".$this->session->userdata('nama');?></b><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url().'admin/ganti_password' ?>"><i class="glyphicon glyphicon-lock"></i>Ganti Password</a></li>
                <li><a href="<?php echo base_url().'admin/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">

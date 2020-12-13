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
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/daun-berguguran.js" type="text/javascript"></script>
	<nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
        	<div class="navbar-header">
        	<a style="color: white;" class="navbar-brand" href="<?php echo base_url().'admin'; ?>"Perpustakaan><span style="color: white; width: 30px;" class="glyphicon glyphicon-education"></span> E-Library </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1" style="float: right;">
        	<ul class="nav navbar-nav navbar-right">
            	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false">Menu</b><span class="caret"></span></a>
            		<ul class="dropdown-menu">
                		<!--<li><a href="<?php //echo base_url().'admin/ganti_password' ?>"><i class="glyphicon glyphicon-lock"></i>Ganti Password</a></li>-->
                		<li><a href="<?php echo base_url().'member/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              		</ul>
            	</li>
          	</ul>
      	</div>
    </nav>

<center>
    <div class="welcome" style="border-radius: 10px; background-color: #2c2c2c; color: white; margin-top: 100px; width: 93%; padding: 10px; ">
    		<h1 style="font-family: 'Georgia', serif;">Selamat Datang, </h1>
    		<br>
    		<h4 style="font-family: 'Georgia', serif;">Terima Kasih telah menjadi kawan bacaan kami, teruslah membaca!</h4>
    </div>
</center>
<div class="constraint">
<div class="page-header">
	<h3 style="margin-left: 50px; font-family: 'Georgia', serif; margin-top: 65px; font-size: 32px; color: black; text-shadow: 3px 2px 1px grey;">Daftar Buku</h3>
</div>

<br>
<center>
<div class="table-responsive" style="width: 90%;">
	<table class="table table-bordered table-striped table-hover" id="table-datatable" style="font-family: 'Georgia', serif;">
		<thead style="background-color: #2c2c2c; color: white;">
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Judul Buku</th>
				<th>pengarang</th>
				<th>penerbit</th>
				<th>Tahun Terbit</th>
				<th>ISBN</th>
				<th>Lokasi</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach($buku as $b){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" width="80" height="80" alt="gambar tidak ada " ></td>
				<td><?php echo $b->judul_buku ?></td>
				<td><?php echo $b->pengarang ?></td>
				<td><?php echo $b->penerbit ?></td>
				<td><?php echo $b->thn_terbit ?></td>
				<td><?php echo $b->isbn ?></td>
				<td><?php echo $b->lokasi ?></td>
				<td>
					<?php 
					if($b->status_buku == "1"){
						echo "Tersedia";
					}else if($b->status_buku == "0"){
						echo "Sedang dipinjam";
					} 
					?>
				</td>
			</tr>
<?php } ?>
</tbody>
	</table>
</div>
</center>
</div>
<br>
<br>
</body>
</html>
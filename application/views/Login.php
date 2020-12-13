<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Log In - Perpustakaan Online</title>
	<meta charset="UTF-8">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url().'assets/harta/aset-home/css/bootstrap.min.css' ?>"/>
	<link rel="stylesheet" href="<?php echo base_url().'assets/harta/aset-home/css/font-awesome.min.css' ?>"/>
	<link rel="stylesheet" href="<?php echo base_url().'assets/harta/aset-home/css/style-home.css' ?>"/>

</head>
<body>
		<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert alert-danger alert-danger'>";
				echo $this->session->flashdata('alert');
				echo "</div>";
			} else if($_GET['pesan']=='logout'){
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-success'>";
					echo $this->session->flashdata('anda telah logout');
					echo "</div>";
				}
			}else if($_GET['pesan']=='Belum Login'){
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-primary'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}
			}
		}else{
			if($this->session->flashdata())
			{
				echo "<div class='alert alert-danger alert-message'>";
				echo $this->session->flashdata('alert');
				echo "</div>";
			}
		} 
		?>
		<br>
		<header class="header-section">
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-social"> 
				<a href="<?php echo base_url().'admin' ?>"><i class="fa fa-user"></i> Admin|Anggota</a>
			</div>
		</header>
		<div class="site-content-warp">
			<div class="main-sidebar">
				<div class="mb-warp">
					<a href="#" class="site-logo" style="text-decoration: none;">
						<h2>LOGIN</h2>
						<p>Perpustakaan Online</p>
					</a>
					<div class="about-info">
						<h2>By Fitriana Fajriyani.</h2>
						<p>Tugas UAS Perpustakaan Online dengan menggunakan framework CodeIgniter. </p>
					</div>
				</div>
			</div>
			
			<div class="page-section blog-page">
				<div class="blog-posts">
					<div class="blog-post-item" style="background-image: url(assets/ban.jpg); color: black; height: 500px; padding-top: 100px;">
						<center>
						<div class="wrap-content" style="background-color: white; width: 540px; padding-top: 20px; padding-bottom: 20px;">
							<form action="<?php echo base_url().'welcome/login' ?>" method="post" style="width: 500px;">
								<label>Username</label> <br>
								<input type="text" name="username" placeholder="username" class="form-control"> <?php echo form_error('username'); ?> <br>
								<label>Password</label> <br>
								<input type="password" name="password" placeholder="password" class="form-control"> <?php echo form_error('password'); ?><br>
								<div class="form-group">
              						<label for="sebagai">Login Sebagai :</label>
              						<select name="sebagai" class="form-control">
                						<option value="admin">Admin</option>
                						<option value="anggota">Anggota</option>
              						</select>
            					</div>
								<button type="submit" name="Login" class="btn btn-dark">Masuk</button>
							</form>
						</div>
						</center>
					</div> 
				</div>
			</div>
		</div>
	</div>

	<script src="../harta/aset-home/js/jquery-3.2.1.min.js"></script>
	<script src="../harta/aset-home/js/bootstrap.min.js"></script>
	<script src="../harta/aset-home/js/jquery.nicescroll.min.js"></script>
	<script src="../harta/aset-home/js/main.js"></script>

	</body>
</html>
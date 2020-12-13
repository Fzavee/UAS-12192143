<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/daun-berguguran.js" type="text/javascript"></script>
<div class="page-header">
	<h3 style="font-family: 'Georgia', serif; margin-top: 65px; font-size: 32px; color: black; text-shadow: 3px 2px 1px grey;">Data Anggota</h3>
</div>

<a style="background-color: #4d4d4d; color: white;" href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn"><span class="glyphicon glyphicon-plus"></span>Anggota Baru</a><br><br>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id ="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<!--<th>Foto</th> -->
				<th>Nama Anggota</th>
				<th>Gender</th>
				<th>No.Telpon</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach ($anggota as $a) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<!--<td><img src="<?php //echo base_url().'/assets/upload/'.$a->gambar; ?>" width="80" height="80" alt="gambar tidak ada " ></td> -->
				<td><?php echo $a->nama_anggota ?></td>
				<td><?php echo $a->gender ?></td>
				<td><?php echo $a->no_telp ?></td>
				<td><?php echo $a->alamat ?></td>
				<td><?php echo $a->email ?></td>
				<td nowrap="nowrap">
					<a style="background-color: #4d4d4d; color: white;" class="btn btn-xs" href="<?php echo base_url().'admin/edit_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a style="background-color: #2c2c2c; color: white;" class="btn btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/daun-berguguran.js" type="text/javascript"></script>
<div class="constraint">
<div class="page-header">
	<h3 style="font-family: 'Georgia', serif; margin-top: 65px; font-size: 32px; color: black; text-shadow: 3px 2px 1px grey;">Data Buku</h3>
</div>
<a style="background-color: #4d4d4d; color: white;" href="<?php echo base_url().'admin/tambah_buku'; ?>" class="btn btn"><span class="glyphicon glyphicon-plus"></span> &emsp; Buku Baru</a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable" style="font-family: 'Georgia', serif;">
		<thead>
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
				<th>Pilihan</th>
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
				<td nowrap="nowrap" style="text-align: center;">
					<a style="background-color: #4d4d4d; color: white;" class="btn btn-xs" href="<?php echo base_url(). 'admin/edit_buku/' .$b->id_buku; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a style="background-color: #2c2c2c; color: white;" class="btn btn-primary btn-xs" href="<?php echo base_url(). 'admin/hapus_buku/' .$b->id_buku; ?>"><span class="glyphicon glyphicon-remove"></span></a>
					
				</td>
			</tr>
<?php } ?>
</tbody>
	</table>
</div>
</div>
<br>
<br>
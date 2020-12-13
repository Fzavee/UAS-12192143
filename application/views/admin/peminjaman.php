<div class="page-header">
<div>
<h3 style="font-family: 'Georgia', serif; margin-top: 65px; font-size: 32px; color: black; text-shadow: 3px 2px 1px grey;">Data Transaksi</h3>
</div>
</div>
<a style="background-color: #4d4d4d; color: white;" href="<?php echo base_url().'admin/tambah_peminjaman'; ?>" class="btn"><span class="glyphicon glyphicon-plus"></span> Transaksi
Baru</a>
<br><br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover" id =
"table-datatable">
<thead>
<tr>
<th>No</th>
<th>Anggota</th>
<th>Buku</th>
<th>Tgl. Pinjam</th>
<th>Tgl. Kembali</th>
<th>Denda/Hari</th>
<th>Tgl. Dikembalikan</th>
<th>Total Denda</th>
<th>Status Buku</th>
<th>Status Pinjam</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach ($peminjaman as $p) {
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $p->id_anggota ?></td>
<td><?php echo $p->id_pinjam ?></td>
<td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
<td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
<td><?php echo "Rp. ".number_format($p->denda); ?></td>
<td>
<?php
	if($p->tgl_pengembalian =="0000-00-00"){
	echo "-";
	}else{
	echo date('d/m/Y',strtotime($p->tgl_pengembalian));
	} ?>
</td>
<td><?php echo "Rp. ". number_format($p->total_denda)." ,-"; ?></td>
<td>
<?php
if($p->status_buku == "1"){
echo "Selesai";
}else{
echo "-";
} ?>
</td>
<td>
<?php
if($p->status_peminjaman == "Selesai"){
echo "-";
}else {
?>
<a style="background-color: #4d4d4d; color: white;" class="btn btn-sm" href="<?php echo
base_url().'admin/transaksi_selesai/'.$p->id_pinjam; ?>"><span class="glyphicon
glyphicon-ok"></span> Selesai</a>

<a style="background-color: #2c2c2c; color: white;" class="btn btn-sm" href="<?php echo
base_url().'admin/transaksi_hapus/'.$p->id_pinjam; ?>"><span class="glyphicon
glyphicon-remove"></span> Batal </a>
<?php } ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
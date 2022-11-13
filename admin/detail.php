<h2>Detail Pembelian</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian ='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<div class="row">
	<div class="col-md-6">
		<table class="table table-bordered">
			<tr>
				<th>ID. Pembelian</th>
				<th><?php echo $detail['id_pembelian'] ?></th>
			</tr>
			<tr>
				<th>Waktu Pembelian</th>
				<th><?php echo $detail['waktu_pembelian'] ?></th>
			</tr>
			<tr>
				<th>Tanggal Pembelian</th>
				<th><?php echo $detail['tanggal_pembelian'] ?></th>
			</tr>
			<tr>
				<th>Jumlah Pembelian</th>
				<th>Rp. <?php echo number_format($detail['total_pembelian']) ?></th>
			</tr>
			<tr>
				<th>Status Pembelian</th>
				<th><?php echo $detail ['status_pembelian'] ?></th>
			</tr>
		</table>
	</div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM beli_hidangan JOIN hidangan ON
			beli_hidangan.id_hidangan=hidangan.id_hidangan
			WHERE beli_hidangan.id_pembelian='$_GET[id]'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_hidangan']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga_hidangan']); ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>
				Rp. <?php echo number_format($pecah['harga_hidangan']*$pecah['jumlah']); ?>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
	<tr>
		<th colspan="4">Total</th>
		<th>Rp. <?php echo number_format($detail['total_pembelian']); ?></th>
	</tr>
	<?php
	$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian ='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
	?>
	<tr>
		<th colspan="4">Tunai</th>
		<th>Rp. <?php echo number_format($detail['bayar']); ?></th>
	</tr>
	<tr>
		<th colspan="4">Kembali</th>
		<th>Rp. <?php echo number_format($detail['uang_kembalian']); ?></th>
	</tr>
</table>

<a href="cetak_detail.php?halaman&id=<?php echo $detail['id_pembelian']; ?>" target="_blank" class="btn btn-secondary"><i class="glyphicon glyphicon-print"></i> CETAK</a>
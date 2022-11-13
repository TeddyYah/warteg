<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Nota</title>
</head>
<body>
<center>
	<h3>Warteg Kirara <br> Isekai ST 12 No. 69 <br> Kota Kontalatos</h3>
</center>

<?php
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian ='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

		<center>
		<table border="0" style="width: 100%">
			<tr>
				<td>ID. Pembelian</td>
				<td>: <?php echo $detail['id_pembelian'] ?></td>
			</tr>
			<tr>
				<td>Waktu Pembelian</td>
				<td>: <?php echo $detail['waktu_pembelian'] ?></td>
			</tr>
			<tr>
				<td>Tanggal Pembelian</td>
				<td>: <?php echo $detail['tanggal_pembelian'] ?></td>
			</tr>
			<tr>
				<td>Status Pembelian</td>
				<td>: <?php echo $detail ['status_pembelian'] ?></td>
			</tr>
		</table>

<br>
<br>

<center>
<table border="0" style="width: 100%">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM beli_hidangan JOIN hidangan ON
			beli_hidangan.id_hidangan=hidangan.id_hidangan
			WHERE beli_hidangan.id_pembelian='$_GET[id]'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['nama_hidangan']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga_hidangan']); ?></td>
			<td><center><?php echo $pecah['jumlah']; ?></center></td>
			<td>
				Rp. <?php echo number_format($pecah['harga_hidangan']*$pecah['jumlah']); ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
	<tr>
		<td colspan="3"><strong>Total</td>
		<td><strong>Rp. <?php echo number_format($detail['total_pembelian']); ?></td>
	</tr>
	<?php
	$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian ='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
	?>
	<tr>
		<td colspan="3"><strong>Tunai</td>
		<td><strong>Rp. <?php echo number_format($detail['bayar']); ?></td>
	</tr>
	<tr>
		<td colspan="3"><strong>Kembali</td>
		<td><strong>Rp. <?php echo number_format($detail['uang_kembalian']); ?></td>
	</tr>

</table>

<script>
	window.print();
</script>

</center>
</body>
</html>
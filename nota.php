<?php 
session_start();
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nota Pembayaran</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


<section class="konten">
	<div class="container">
		



		<!-- nota di sini copas dari detail.php yang di admin -->
		<h2>Detail Pembelian</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<div class="row">
	<div class="col-md-4">
		<table class="table">
				<tr>
					<th>No. Pembelian</th>
					<td><?php echo $detail['id_pembelian']; ?></td>
				</tr>
				<tr>
					<th>Waktu Pembelian</th>
					<td><?php echo $detail["waktu_pembelian"] ?></td>
				</tr>
				<tr>
					<th>Tanggal Pembelian</th>
					<td><?php echo $detail["tanggal_pembelian"] ?></td>
				</tr>
				<tr>
					<th>Status Pembelian</th>
					<td><?php echo $detail["status_pembelian"] ?></td>
				</tr>
			</table>
	</div>
	
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pesanan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Sub Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM beli_hidangan WHERE id_pembelian='$_GET[id]'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']) ; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>Rp. <?php echo number_format($pecah['subharga']) ; ?></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>


<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			<p>
				Silahkan melakukan pembayaran dengan total harga <strong>Rp. <?php echo number_format($detail
				['total_pembelian']);  ?></strong> 
			</p>
		</div>
	</div>
</div>
<?php if ($detail['status_pembelian']=="Sudah Melakukan Pembayaran")
{
	echo "<div class='alert alert-info'>Terima Kasih</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}
?>
</section>
</body>
</html>
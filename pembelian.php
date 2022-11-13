<?php  
session_start();

/*echo "<pre>";
print_r($_SESSION['pembelian']);
echo "</pre>";*/

include 'koneksi.php';

if(empty($_SESSION["pembelian"]) OR !isset($_SESSION["pembelian"]))
{
	echo "<script>alert('jajan dulu ^^');</script>";
	echo "<script>location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembelian</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'menu.php'; ?>


<section class="konten">
	<div class="container">
		<h1>Pembelian</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Hidangan</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Sub Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php foreach ($_SESSION["pembelian"] as $id_hidangan => $jumlah): ?>
				<!-- menampilkan id_hidangan yang sedang diperulangkan berdasarkan id_hidangan -->
				<?php  
				$ambil = $koneksi->query("SELECT * FROM hidangan WHERE id_hidangan='$id_hidangan'");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah['harga_hidangan']*$jumlah;
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['nama_hidangan']; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga_hidangan"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
					<td>
						<a href="hapuspembelian.php?id=<?php echo $id_hidangan ; ?>" 
						class="btn-danger btn" 
						onclick="javascript: return confirm('Anda yakin hapus ?')">Hapus</a>
					</td>
				</tr>
				<?php $nomor++; ?>
			<?php endforeach ?>
			</tbody>
		</table>

		<a href="index.php" class="btn btn-default">Lanjutkan Jajan</a>
		<a href="pembayaran.php" class="btn btn-primary">Pembayaran</a>
	</div>
</section>
</body>
</html>
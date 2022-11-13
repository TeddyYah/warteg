<?php  
session_start();
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
	<title>Pembayaran</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
	
<?php include 'menu.php'; ?>


<section class="konten">
	<div class="container">
		<h1>Pembayaran</h1>
		<hr>
		<form method="post">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Hidangan</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Sub Harga</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php $totalbelanja = 0; ?>
				<?php foreach ($_SESSION["pembelian"] as $id_hidangan => $jumlah): ?>
				<!-- menampilkan hidangan yang sedang diperulangkan berdasarkan id_hidangan -->
				<?php  
				$ambil = $koneksi->query("SELECT * FROM hidangan 
					WHERE id_hidangan='$id_hidangan'");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah['harga_hidangan']*$jumlah;
				
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['nama_hidangan']; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga_hidangan"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
				</tr>
				<?php $nomor++; ?>
				<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<th>Rp. <?php echo number_format($totalbelanja) ?></th>
				</tr>
			</tfoot>
		</table>
		<a href="pembelian.php" class="btn btn-default">Kembali ke pembelian</a>
		<button class="btn btn-primary" name="pembayaran">Pembayaran</button>	
	</form>
		
		<?php  
		if (isset($_POST["pembayaran"]))
		{
			date_default_timezone_set('Asia/Jakarta');
			$tanggal_pembelian = date("Y-m-d");
			$waktu_pembelian = date("H:i:s");

			$total_pembelian = $totalbelanja;

			// 1. menyimpan data ke tabel pembelian
			$koneksi->query("INSERT INTO pembelian 
				(tanggal_pembelian,waktu_pembelian,total_pembelian)
				VALUES ('$tanggal_pembelian','$waktu_pembelian','$total_pembelian')");

			// mendapatkan id pembelian barusan terjadi
			$id_pembelian_barusan = $koneksi->insert_id;

			foreach ($_SESSION["pembelian"] as $id_hidangan => $jumlah)
			{
				//mendapatkan data hidangan berdasarkan id_hidangan
				$ambil = $koneksi->query("SELECT * FROM hidangan WHERE id_hidangan='$id_hidangan'");
				$perhidangan = $ambil->fetch_assoc();

				$nama = $perhidangan['nama_hidangan'];
				$harga = $perhidangan['harga_hidangan'];
				$subharga = $perhidangan['harga_hidangan']*$jumlah;
				$koneksi->query("INSERT INTO beli_hidangan (id_pembelian,id_hidangan,nama,harga,subharga,jumlah)
					VALUES ('$id_pembelian_barusan','$id_hidangan','$nama','$harga','$subharga','$jumlah') ");
			}

			// mengkosongkan pembelian belanja

			unset($_SESSION["pembelian"]);


			// tampilkan diahlihkan ke halaman nota, nota dari pemberian yang barusan
			echo "<script>alert('Proses pembayaran telah di lakukan');</script>";
			echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";
		}
		?>



	</div>
</section>





</body>
</html>
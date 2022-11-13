<?php session_start(); ?>
<?php include 'koneksi.php'; ?>
<?php  
// mendapatkan id_hidangan dari url
$id_hidangan = $_GET["id"];

// query ambil data
$ambil = $koneksi->query("SELECT * FROM hidangan WHERE id_hidangan='$id_hidangan'");
$detail = $ambil->fetch_assoc();

/*echo "<pre>";
print_r($detail);
echo "</pre>";*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Hidangan</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">

</head>
<body>


<?php include 'menu.php'; ?>

<section class="kontent">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="foto_hidangan/<?php echo $detail["foto_hidangan"]; ?>" alt="" class="img-responsive" width="500px" height="250px">
				<br><br>
				<a href="index.php" class="btn btn-default">Back to Menu</a>
			</div>
			<div class="col-md-4">
				<h2><?php echo $detail["nama_hidangan"] ?></h2>
				<h4>Rp. <?php echo number_format($detail["harga_hidangan"]) ?></h4>

				<form method="post">
					<div class="form-group">
						<div class="input-group">
							<input type="number" min="1" class="form-control" name="jumlah" max="" value="1">

						</div>
					</div>
					<div class="input-group-btn">
						<button class="btn btn-primary" name="beli">Beli</button>
					</div>
				</form>

				<?php  
				// jika ada tombol beli
				if (isset($_POST["beli"])) 
				{
					// mendapatkan jumlah yang di inputkan
					$jumlah = $_POST["jumlah"];
					// masukkan ke pembelian
					$_SESSION["pembelian"][$id_hidangan] = $jumlah;

					echo "<script>alert('Meluncur ke tab Pembelian');</script>";
					echo "<script>location='pembelian.php';</script>";
				}

				?>
 				

 				<br><?php echo $detail['status_hidangan'] ?>
				<br><label>Deskrispsi</label>: <br>
				<textarea rows="4" cols="50" disabled><?php echo $detail['deskripsi_hidangan']  ?></textarea>

			</div>
		</div>
	</div>
</section>





</body>
</html>
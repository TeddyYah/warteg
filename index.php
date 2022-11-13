<?php  
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Warteg Kirara</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style type="text/css">
	h3 {
	color: red;
	}
	h4 {
	color: blue;
	}
	b {
	color: black;
	}
</style>
</head>
<body>

<?php include 'menu.php'; ?>

<!-- konten -->
<section class="konten">
	<div class="container">
		<h1>Menu Hidangan</h1>

		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM hidangan"); ?>
			<?php while ($perhidangan = $ambil->fetch_assoc()){ ?>

			<div class="col-md-3">
				<div class="thumbnail">
					<input type="image" src="foto_hidangan/<?php echo $perhidangan['foto_hidangan']; ?>" width="250px" dan height="150px" />
					<div class="caption">
						<h3><?php echo $perhidangan['nama_hidangan'] ?></h3>
						<h4>Rp. <?php echo number_format($perhidangan['harga_hidangan']) ?></h4>
						<h5><b><?php echo $perhidangan['status_hidangan'] ?></b></h5>

						<?php if ($perhidangan['status_hidangan']!=="Terjual Habis"): ?>
						<a href="beli.php?id=<?php echo $perhidangan['id_hidangan']; ?>" 
							class="btn btn-primary">Jajan</a>
						<?php endif ?>
					</div>
				</div>
			</div>
		<?php } ?>

</section>
</body>
</html>
<?php include 'koneksi.php'; ?>
<?php  
$keyword = $_GET["keyword"];

$semuadata=array();
$ambil = $koneksi->query("SELECT * FROM hidangan WHERE nama_hidangan LIKE '%$keyword%'
	OR deskripsi_hidangan LIKE '%$keyword%'");
while($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

/*echo "<pre>";
print_r($semuadata);
echo "</pre>";*/


?>

<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
</head>
<body>
<?php include 'menu.php'; ?>
	<div class="container">
		<h3>Hasil Pencarian : <?php echo $keyword ?></h3>
		<?php if(empty($semuadata)): ?>
			<div class="alert alert-danger">Produk <strong><?php echo $keyword ?></strong> tidak ditemukan</div>
		<?php endif ?>

	<div class="row">

		<?php foreach ($semuadata as $key => $value): ?>
		<div class="col-md-3">
			<div class="thumbnail">
				<input type="image" src="foto_hidangan/<?php echo $value["foto_hidangan"] ?>" width="250px" dan height="150px"/>
				<div class="caption">
					<h3><?php echo $value["nama_hidangan"] ?></h3>
					<h5>Rp. <?php echo number_format($value["harga_hidangan"]) ?></h5>
					<a href="beli.php?id=<?php echo $value["id_hidangan"]; ?>" class="btn btn-primary">Jajan</a>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	</div>
</div>
</body>
</html>
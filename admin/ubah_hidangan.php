<h2>Ubah Hidangan</h2>
<?php  
$ambil=$koneksi->query("SELECT * FROM hidangan WHERE id_hidangan='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

/*echo "<pre>";
print_r($pecah);
echo "</pre>";*/
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Hidangan</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_hidangan']; ?>">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_hidangan']; ?>">
	</div>
	<div class="form-group">
		<img src="../foto_hidangan/<?php echo $pecah['foto_hidangan'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi_hidangan']; ?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php  
if (isset($_POST['ubah']))
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto=$_FILES['foto']['tmp_name'];
	// jika foto dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../foto_hidangan/$namafoto");

		$koneksi->query("UPDATE hidangan SET nama_hidangan='$_POST[nama]',
			harga_hidangan='$_POST[harga]',foto_hidangan='$namafoto',deskripsi_hidangan='$_POST[deskripsi]'
			WHERE id_hidangan='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE hidangan SET nama_hidangan='$_POST[nama]',
			harga_hidangan='$_POST[harga]',deskripsi_hidangan='$_POST[deskripsi]' WHERE id_hidangan='$_GET[id]'");
	}
	echo "<script>alert('Data hidangan telah diubah')</script>";
	echo "<script>location='index.php?halaman=hidangan';</script>";
}
?>
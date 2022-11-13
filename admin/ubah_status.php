<h2>Ubah Hidangan</h2>
<?php  
// mendapatkan id_hidangan dari url
$id_hidangan = $_GET['id'];

// mengambil data hidangan berdasarkan id_hidangan
$ambil = $koneksi->query("SELECT * FROM hidangan WHERE id_hidangan='$id_hidangan'");
$detail = $ambil->Fetch_assoc();


/*echo "<pre>";
print_r($detail);
echo "</pre>";*/

?>
<form method="post">
<div class="col-md-3">
<div class="form-group">	
		<label>STATUS</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			<option value="Tersedia">Tersedia</option>
			<option value="Terjual Habis">Terjual Habis</option>
		</select>
		</div>
		<button class="btn btn-primary" name="proses">Proses</button>
		</div>
		</form>


<?php  
if (isset($_POST["proses"]))
{
	
	$status = $_POST["status"];
	$koneksi->query("UPDATE hidangan SET status_hidangan='$status'
		WHERE id_hidangan='$id_hidangan'");

	echo "<script>alert('Status hidangan telah di ubah');</script>";
	echo "<script>location='index.php';</script>";
}
?>
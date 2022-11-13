<?php 

$ambil = $koneksi->query("SELECT * FROM hidangan WHERE id_hidangan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['foto_hidangan'];
if (file_exists("../foto_hidangan/$foto"))
{
	unlink("../foto_hidangan/$foto");
}


$koneksi->query("DELETE FROM hidangan WHERE id_hidangan='$_GET[id]'");

echo "<script>alert('hidangan terhapus');</script>";
echo "<script>location='index.php?halaman=hidangan';</script>";

?>
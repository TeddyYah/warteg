<?php  
session_start();
$id_hidangan=$_GET["id"];
unset($_SESSION["pembelian"][$id_hidangan]);

echo "<script>alert('Hidangan telah dihapus dari pembelian');</script>";
echo "<script>location='pembelian.php';</script>";
?>
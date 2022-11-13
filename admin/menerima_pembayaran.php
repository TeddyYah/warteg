<h2>Data Pembayaran</h2>

<?php  
// mendapatkan id_pembelian dari url
$id_pembelian = $_GET['id'];

// mengambil data pembelian berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian'");
$detail = $ambil->Fetch_assoc();


/*echo "<pre>";
print_r($detail);
echo "</pre>";*/

?>

<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th>ID. Pembelian</th>
                <th><?php echo $detail['id_pembelian'] ?></th>
            </tr>
            <tr>
                <th>Waktu Pembelian</th>
                <th><?php echo $detail['waktu_pembelian'] ?></th>
            </tr>
            <tr>
                <th>Tanggal Pembelian</th>
                <th><?php echo $detail['tanggal_pembelian'] ?></th>
            </tr>
            <tr>
                <th>Jumlah Pembelian</th>
                <th>Rp. <?php echo number_format($detail['total_pembelian']) ?></th>
            </tr>
            <tr>
                <th>Status Pembelian</th>
                <th><?php echo $detail ['status_pembelian'] ?></th>
            </tr>
        </table>
    </div>
</div>

<h2>Proses Tranksaksi</h2>
<form action="#" method="post">
    <div class="col-md-4">
        <div class="form-group">
            <label>Total</label>
            <input type="text" class="form-control" name="total"
                value="<?php echo number_format($detail['total_pembelian']) ?>">
        </div>
        <div class="form-group">
            <label>Bayar</label>
            <input type="text" class="form-control" class="uang" name="bayar">
        </div>
        <div class="form-group">
            <label>STATUS</label>
            <select class="form-control" name="status">
                <option value="">Pilih Status</option>
                <option value="Sudah Melakukan Pembayaran">Sudah Melakukan Pembayaran</option>
                <option value="Belum Melakukan Pembayaran">Belum Melakukan Pembayaran</option>
            </select>
        </div>
        <button class="btn btn-primary" name="proses">Proses</button>
    </div>
</form>

<script src="jquery.min.js"></script>
<script src="jquery.mask.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    // Format mata uang.
    $('.uang').mask('000.000.000', {
        reverse: true
    });

})
</script>

<?php  
if (isset($_POST["proses"]))
{
	$bayar = $_POST["bayar"];
	$jumlah = $detail['total_pembelian'];
	$uang_kembalian = $bayar-$jumlah;

	$koneksi->query("INSERT INTO pembayaran (id_pembelian,bayar,jumlah,uang_kembalian) 
		VALUES ('$id_pembelian','$bayar','$jumlah','$uang_kembalian') ");


	$status = $_POST["status"];
	$koneksi->query("UPDATE pembelian SET status_pembelian='$status'
		WHERE id_pembelian='$id_pembelian'");

	echo "<script>alert('Data pembelian terupdate');</script>";
	echo "<script>location='index.php?halaman=pembelian';</script>";
}
?>
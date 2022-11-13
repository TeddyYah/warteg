<h2>Kirara Via Administration</h2>
<style type="text/css">
	h3 {
	color: #FF4500;
}
h4 {
	color: blue;
}
b {
	color: black;
}
</style>
<hr>
<section class="konten">

		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM hidangan"); ?>
			<?php while ($perhidangan = $ambil->fetch_assoc()){ ?>

			<div class="col-md-3">
				<div class="thumbnail">
					<input type="image" src="../foto_hidangan/<?php echo $perhidangan['foto_hidangan']; ?>" width="200px" dan height="100px" />
					<div class="caption">
						<h3><?php echo $perhidangan['nama_hidangan']; ?></h3>
						<h4>Rp. <?php echo number_format($perhidangan['harga_hidangan']); ?></h5>
						<h5><b>Status : </b><?php echo $perhidangan['status_hidangan']; ?></h5>	
						<a href="index.php?halaman=ubah_status&id=<?php echo $perhidangan['id_hidangan']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
					</div>
				</div>
			</div>
		<?php } ?>
</section>
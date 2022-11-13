<h2>Data Pembelian</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID Pembelian</th>
			<th>Tanggal</th>
			<th>Waktu</th>
			<th>Status Pembelian</th>
			<th>Total</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id_pembelian']; ?></td>
			<td><?php echo $pecah['tanggal_pembelian']; ?></td>
			<td><?php echo $pecah['waktu_pembelian']; ?></td>
			<td><?php echo $pecah['status_pembelian']; ?></td>
			<td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info"><i class="glyphicon glyphicon-record"></i> Detail</a>
				<?php if ($pecah['status_pembelian']!=="Sudah Melakukan Pembayaran"): ?>
				<a href="index.php?halaman=menerima_pembayaran&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pembayaran</a>
				<?php endif ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
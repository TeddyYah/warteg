<h2>List Hidangan</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Hidangan</th>
			<th>Harga</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM hidangan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_hidangan']; ?></td>
			<td>Rp. <?php echo number_format ($pecah['harga_hidangan']); ?></td>
			<td>
			 	<img src="../foto_hidangan/<?php echo $pecah['foto_hidangan']; ?>"  width="100"/>
			</td>
			<td>
				<a href="index.php?halaman=ubah_hidangan&id=<?php echo $pecah['id_hidangan']; ?>" 
					class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
				<a href="index.php?halaman=hapus_hidangan&id=<?php echo $pecah['id_hidangan']; ?>" 
					class="btn-danger btn" 
					onclick="javascript: return confirm('Anda yakin hapus ?')">
					<i class="fa fa-remove"></i> Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_hidangan" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
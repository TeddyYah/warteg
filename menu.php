<!-- navbar -->
<style type="text/css">
	.navbar-default {
  background-color: #ff0000;
}
	.navbar-default .navbar-nav > li > a {
  color: #ffffff;
}
</style>
<nav class="navbar navbar-default">
	<div class="container">
		
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="pembelian.php">Pembelian</a></li>
			<li><a href="pembayaran.php">Pembayaran</a></li>
		</ul>

		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword">
			<button class="btn btn">Cari</button>
		</form>

	</div>
</nav>
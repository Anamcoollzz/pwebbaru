<?php $title = 'Keranjang' ?>
<!DOCTYPE html>
<html>

<?php include "layouts/head.php" ?>

<body>

	<?php include "layouts/header.php" ?>

	<div class="keranjang">
		<h1>Keranjang Belanja</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Produk</th>
					<th>Harga</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>
						<img src="img/feature_1.png" alt="">
					</td>
					<td>Rp. 12.000.000</td>
				</tr>
				<tr>
					<td>2</td>
					<td>
						<img src="img/feature_1.png" alt="">
					</td>
					<td>Rp. 13.000.000</td>
				</tr>
			</tbody>
		</table>
		<br>
		<h2>
			Total : Rp. 25.000.000
		</h2>
		<br>
		<br>
		<a href="#" class="btn btn-primary btn-lg">Checkout</a>
	</div>

	<?php include "layouts/footer.php" ?>
	
</body>
</html>
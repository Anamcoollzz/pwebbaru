<?php $title = 'Detail Produk' ?>
<!DOCTYPE html>
<html>

<?php include "layouts/head.php" ?>

<body>

	<?php include "layouts/header.php" ?>
	
	<div class="detail-produk">
		<div class="detail-produk-kiri">
			<div class="gambar-gede">
				<img src="img/feature_1.png" alt="">
			</div>
			<div class="kumpulan-gambar-kecil">
				<div class="gambar-kecil">
					<img src="img/feature_1.png" alt="">
				</div>
				<div class="gambar-kecil">
					<img src="img/feature_1.png" alt="">
				</div>
				<div class="gambar-kecil">
					<img src="img/feature_1.png" alt="">
				</div>
			</div>
		</div>
		<div class="detail-produk-kanan">
			<h2 class="judul-produk">Asus ROG</h2>
			<table>
				<tbody>
					<tr>
						<td>Tahun</td>
						<td>2017</td>
					</tr>
					<tr>
						<td>Warna</td>
						<td>Hitam Merah</td>
					</tr>
					<tr>
						<td>Merk</td>
						<td>Asus</td>
					</tr>
					<tr>
						<td>Berat</td>
						<td>3Kg</td>
					</tr>
				</tbody>
			</table>
			<br>
			<h3>Rp. 13.000.00</h3>
			<p style="margin-top: 20px; margin-bottom: 20px;">
				Republic of Gamers adalah sebuah brand perangkat keras notebook khusus gaming dari ASUS, perusahaan berbasis di Taiwan yang memproduksi komponen komputer seperti papan induk, kartu grafis, dan notebook. ASUS belakangan ini mulai memproduksi PDA, Telepon genggam, LCD, dan Perangkat keras lainnya
			</p>
			<a href="" class="btn btn-primary">Beli</a>
		</div>
	</div>

	<?php include "layouts/katalog.php" ?>

	<?php include "layouts/moto-kami.php" ?>

	<?php include "layouts/footer.php" ?>

</body>
</html>
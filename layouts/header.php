<header>
	<div class="logo2">Tool Kita</div>
	<a href="javascript:void(0);" class="icon" onclick="haloDropDown()">&#9776;</a>
	<div class="navigasiku" id="navigasiku">
		<div class="logo">Tool Kita</div>
		<a href="index.php" class="active">Beranda</a>
		<div class="dropdown">
			<button class="dropbtn">Belanja
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="kategori.php">Kategori</a>
				<a href="detail-produk.php">Detail Produk</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Halaman
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="keranjang.php">Keranjang</a>
			</div>
		</div>
		<a href="masuk.php">Masuk</a>
		<a href="daftar.php">Daftar</a>
		<div class="cart-dan-pencarian">
			<i class="fa fa-shopping-cart" style="cursor: pointer;" onclick="gotoKeranjang()"></i>
			&nbsp;&nbsp;&nbsp;
			<i class="fa fa-search"></i>
		</div>
	</div>
</header>
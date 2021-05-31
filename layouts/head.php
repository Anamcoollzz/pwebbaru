<head>
	<title><?php echo $title ?></title>
	<meta name="author" content="Hairul Anam, Firdaus Ababil">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/iklan.css">
	<link rel="stylesheet" href="css/katalog.css">
	<link rel="stylesheet" href="css/moto-kami.css">
	<!-- masuk -->
	<link rel="stylesheet" href="css/masuk.css">
	<!-- kategori -->
	<link rel="stylesheet" href="css/kategori.css">
	<!-- produk -->
	<link rel="stylesheet" href="css/produk.css">
	<!-- keranjang -->
	<link rel="stylesheet" href="css/keranjang.css">
	<link rel="stylesheet" href="css/footer.css">
	<!-- font -->
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<script>
		function gotoKeranjang() {
			window.location = 'keranjang.php';
		}
		function haloDropDown() {
			var x = document.getElementById("navigasiku");
			if (x.className === "navigasiku") {
				x.className += " responsive";
			} else {
				x.className = "navigasiku";
			}
		}
	</script>
</head>
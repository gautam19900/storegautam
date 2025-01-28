<?php session_start(); ?>
<?php include 'koneksi.php'; ?>
<?php
// mendapatkan id produk dari url
$id_produk = $_GET["id"];

	// query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'"); 
$detail =$ambil->fetch_assoc();

// echo "<pre>";
// print_r($detail);
// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail | Computer Onshop</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- My Css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="text/css" href="favicon.ico"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--Navbar-->
	<?php include"navbar.php" ?>
	<div class="container">
		<h1 class="center-align">Detail Produk</h1>
		<div class="row">
		
			<div class="grid-example col m4 s12">
				<center> <img class="responsive-img activator" src="foto_produk/<?php echo $detail['foto_produk']; ?>" style="height: 250px; width: 250px;" id="gambarr"></center>
			</div>
		
</script>

			<div class="grid-example col m6 s12"  >
				<h5><?php echo $detail['nama_produk']; ?></h5>
				<h4>Rp.<?php echo number_format($detail['harga_produk']); ?></h4>
				<h5  style="color: rgb(224, 15, 15);"><S>Rp.<?php echo number_format ($detail['harga_diskon']); ?> </s></h5>
				<h7>Stok : <?php echo $detail['stok_produk']; ?></h7>
				
    <!-- Form untuk menangkap jumlah produk -->
    <form method="post" action="">
        <input type="number" name="jumlah" placeholder="Jumlah" min="1" max="<?php echo $detail['stok_produk']; ?>" required>
        <button type="submit" class="btn waves-effect waves-light right btn-small">Pesan via WhatsApp</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil jumlah produk yang diinputkan pengguna
        $jumlahDipesan = intval($_POST['jumlah']);
        
        // Nama produk yang diambil dari variabel $detail
        $namaProduk = $detail['nama_produk'];

        // Buat URL WhatsApp dengan menyisipkan nama produk dan jumlah
        $pesanWhatsApp = "https://wa.me/6285523726321?text=Hai%20saya%20mau%20pesan%20$namaProduk%20sebanyak%20$jumlahDipesan%20pcs.";

        // Redirect ke URL WhatsApp
        echo "<script>window.location.href='$pesanWhatsApp';</script>";
    }
    ?>
</div>

						</div>
						<h7><?php echo $detail['deskripsi_produk']?></h7>
					</form>
					<?php 
					if (isset($_POST["beli"])) {
								// mendapatkan id produk yang kita beli
						$jumlah = $_POST["jumlah"];
								// masukkan di keranjang belanja
						$_SESSION["keranjang"][$id_produk] = $jumlah;

						echo "<script>alert('produk telah masuk ke keranjang')</script>";
						echo "<script>location='keranjang.php';</script>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<br>

</body>
<!-- footer -->
<?php include"footer.php" ;?>
</html>
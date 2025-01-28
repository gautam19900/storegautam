<section id="highlights" class="highlights scrollspy">
	<div class="container">
		<h1 class="center-align">Produk Terbaru</h1>
		<div class="row">
			<?php 	$ambil = $koneksi->query('SELECT * FROM produk'); ?>
			<?php 	while($perproduk = $ambil->fetch_assoc()){ ?>	
				<div class="grid-example col m3 s12" style="color:rgb(6, 2, 13);" >
				<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="responisve-card-link">
					<div class=" responisve-card card hoverable"  >
						<div class="card-image waves-effect waves-block waves-light">
						
							<center>
								<img class="responsive-img activator" src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" style="height: 250px; width: 250px;" id="gambarr">
							</center>

							
							</div>
							<div class="card-content">
								<p>stok : <?php echo $perproduk['stok_produk'] ?></p>
								<span class="harga" style="color: rgb(20, 3, 3);">
									<h4><strong>Rp.<?php echo number_format($perproduk['harga_produk']); ?></stong></h4>
								</span> 
								<span class="harga_diskon"style="color: rgb(235, 15, 15);">
									<h5><S>Rp.<?php echo number_format($perproduk['harga_diskon']); ?></s></h5>
								</span> 
								<span class="card" style="color: rgb(20, 3, 3);">
								<center><h4><strong><p><?php echo $perproduk['nama_produk']; ?></p></strong></h4></center>
								<hr>
								<div class="card-action">
									<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" 
									class="btn waves-effect waves-light left red btn-small ">Detail</a>
								<a href="https://wa.me/6285523726321?text=Hai%20saya%20mau%20pesan%20<?php 	echo $perproduk['nama_produk']; ?> !" class="btn waves-effect waves-light right btn-small">beli</a></span>
								</div>
								
							</div>
						</div>
					</div>
				<?php 	} ?>
			</div>		
		</div>	
	</section>

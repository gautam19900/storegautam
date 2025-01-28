	<!-- NAVBAR -->
	<div class="navbar">
		<nav class="navbar navbar-dark bg-dark">
			<div class="nav-wrapper">
				
				<div class="container">
				
					<ul id="nav-mobile" class="left hide-on-med-and-down">
						<li>
							<a href="index.php"> <h5> GAUTAM </h5></a>
						</li>
					</ul>

					<div class="container" id="cari">
			
			</div> 	

					<ul id="nav-mobile" class="right hide-on-med-and-down">

					
						
						<!-- Jika sudah login ada session pelanggan-->
						<?php if (isset($_SESSION['pelanggan'])): ?>
							<li>
								<a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
							</li>
							<!-- Selain itu (belom login || belom ada session pelanggan) -->
							<?php else: ?>
								<li>
									<a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true"><h6>Login</h6></a>
								</li>	
								<li>
								<a href="daftar.php"><h6>Daftar</h6></a>
							</li>
							<li>
							<a href="Keranjang.php"><h6>Keranjang</h6></a>
						</li>			    	
							<?php endif ;?>
							
						</ul>
					</div> 		
				</div>
			</nav>
		</div>
		<!-- Sidenav -->
		<ul class="sidenav" id="mobile-nav">
			<li>
				<a class="nav-link" href="keranjang.php">Keranjang</a>
			</li>
			<li>
				<a class="nav-link" href="#">Riwayat Belanja</a>
			</li>
			<li>
				<a class="nav-link" href="checkout.php">Checkout</a>
			</li>
			<!-- Jika sudah login ada session pelanggan-->
			<?php if (isset($_SESSION['pelanggan'])): ?>
				<li class="nav-item">
					<a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
				</li>
				<!-- Selain itu (belom login || belom ada session pelanggan) -->
				<?php else: ?>
					<li class="nav-item">
						<a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
					</li>				    	
				<?php endif ?>
			</ul>

<<<<<<< HEAD
<!--NavigationBar---->
	<!-- Grey navigation bar with right-aligned white links and orange navbar-brand-->

=======
>>>>>>> b3b31560bd2b8cb3a8064f4645cea77394ae4575

<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<span class="navbar-brand h1" style="color:orange; font-family: 'My Custom Font'; font-size:24px;">BelgradeRestos</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
					    <a class="nav-link text-white" href="index.php"> About <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link text-white dropdown-toggle" href="#" data-toggle="dropdown"> Restaurants <span class="sr-only">(current)</span></a>
							<div class="dropdown-menu bg-dark">
								<a class="dropdown-item text-white" href="ambar.php">Ambar</a>
								<a class="dropdown-item text-white" href="durmitor.php">Durmitor</a>
								<a class="dropdown-item text-white" href="dvajelena.php">Dva jelena</a>
								<a class="dropdown-item text-white" href="frans.php">Frans</a>
								<a class="dropdown-item text-white" href="lorenco.php">Lorenco i Kakalamba</a>
								<a class="dropdown-item text-white" href="lovac.php">Lovac</a>
								<a class="dropdown-item text-white" href="madera.php">Madera</a>
								<a class="dropdown-item text-white" href="malafabrikaukusa.php">Mala fabrika ukusa</a>
								<a class="dropdown-item text-white" href="sesirmoj.php">Sesir moj</a>
		
							</div>
								
							</li>
<<<<<<< HEAD
					<li class="nav-item">
						<a class="nav-link text-white" href="reservation.php"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="index.php#section2"> Register/Login <span
=======
							</li>
			        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="reservation.php"> Reservation <span
								class="sr-only">(current)</span></a>
					</li>
					<?php endif; ?>
					<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
					<li class="nav-item active">
						<a class="nav-link text-white" href="Logout.php"> Logout <span
>>>>>>> b3b31560bd2b8cb3a8064f4645cea77394ae4575
								class="sr-only">(current)</span></a>
					</li>
					<?php else: ?>
					<li class="nav-item active">
								 <a class="nav-link text-white" href="index.php#section2"> Register/Login <span
									class="sr-only">(current)</span></a>
									</li>
                        <?php endif; ?>
					
				</ul>
			</div>
		</nav>
	</section>
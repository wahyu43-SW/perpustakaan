<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $data['judul'] ?></title>
	<link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/slick/slick-theme.css">
	<link href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	 <div class="row">
        <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
    </div>
	<section>
		<div class="bg">
			<div class="navbar" id="navbar">
				<div class="logo">
					<h1>Skensa</h1>
				</div>
				<nav>
					<ul>
						<li><a href="#" class="underline">Home</a></li>
						<li><a href="#" class="underline">Buku</a></li>
						<li><a href="#" class="underline">Kategori</a></li>
						<li><a href="#" class="underline">Kategori</a></li>
					</ul>
					<div class="bars close">
						<button onclick="closeleft()"><i class="fas fa-times" ></i></button>
					</div>
				</nav>
				<nav>
					<ul>
						<li class="login"><a href="#popup">Login <img src="<?= BASEURL ?>/img/asset/login 1.png" alt="" width="20px"></a></li>
					</ul>
				</nav>
			</div>
			<div class="bars open">
				<button onclick="openleft()"><i class="fas fa-bars"></i></button>
			</div>
			<p class="line anim-typewriter">Welcome To Perpustakaan Skensa</p>
			<div class="bg3">
				<img src="<?= BASEURL ?>/img/asset/Asset 4.png" alt="">
			</div>
			<div class="bg4">
				<img src="<?= BASEURL ?>/img/asset/Asset 5.png" alt="">
			</div>
			
		</div>
		<div class="bg-item">
			<img src="<?= BASEURL ?>/img/asset/Asset-1.png" alt="">
		</div>
	</section>

	<section class="mt-4 konten">
		<div class="judul">
			<h1>Buku Kita</h1>
			<p>Kami Menyediakan Sekitar  <span>&plusmn; &nbsp;1000</span> Buku Di Perpustakaan Skensa</p>
		</div>
		<div class="wrapper mt-4">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="container">
						<div class="overlay">
							<div class = "items"></div>
							<div class = "items head">
								<p>Teori Komunikasi XI RPL</p>
								<hr>
							</div>
							<div class = "items price">
								<!-- <p class="old">$699</p> -->
								<p class="new">Stok Buku : 10</p>
								<br>
								<br>
								<p class="new">Kondisi : Baik</p>
							</div>
							<div class="items cart">
								<!-- <i class="fa fa-shopping-cart"></i> -->
								<span>Book Ready</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="container">
						<div class="overlay">
							<div class = "items"></div>
							<div class = "items head">
								<p>Teori Komunikasi XI RPL</p>
								<hr>
							</div>
							<div class = "items price">
								<!-- <p class="old">$699</p> -->
								<p class="new">Stok Buku : 10</p>
								<br>
								<br>
								<p class="new">Kondisi : Baik</p>
							</div>
							<div class="items cart">
								<!-- <i class="fa fa-shopping-cart"></i> -->
								<span>Book Ready</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="container">
						<div class="overlay">
							<div class = "items"></div>
							<div class = "items head">
								<p>Teori Komunikasi XI RPL</p>
								<hr>
							</div>
							<div class = "items price">
								<!-- <p class="old">$699</p> -->
								<p class="new">Stok Buku : 10</p>
								<br>
								<br>
								<p class="new">Kondisi : Baik</p>
							</div>
							<div class="items cart">
								<!-- <i class="fa fa-shopping-cart"></i> -->
								<span>Book Ready</span>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row"> -->
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="container">
							<div class="overlay">
								<div class = "items"></div>
								<div class = "items head">
									<p>Teori Komunikasi XI RPL</p>
									<hr>
								</div>
								<div class = "items price">
									<!-- <p class="old">$699</p> -->
									<p class="new">Stok Buku : 10</p>
									<br>
									<br>
									<p class="new">Kondisi : Baik</p>
								</div>
								<div class="items cart">
									<!-- <i class="fa fa-shopping-cart"></i> -->
									<span>Book Ready</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="container">
							<div class="overlay">
								<div class = "items"></div>
								<div class = "items head">
									<p>Teori Komunikasi XI RPL</p>
									<hr>
								</div>
								<div class = "items price">
									<!-- <p class="old">$699</p> -->
									<p class="new">Stok Buku : 10</p>
									<br>
									<br>
									<p class="new">Kondisi : Baik</p>
								</div>
								<div class="items cart">
									<!-- <i class="fa fa-shopping-cart"></i> -->
									<span>Book Ready</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="container">
							<div class="overlay">
								<div class = "items"></div>
								<div class = "items head">
									<p>Teori Komunikasi XI RPL</p>
									<hr>
								</div>
								<div class = "items price">
									<!-- <p class="old">$699</p> -->
									<p class="new">Stok Buku : 10</p>
									<br>
									<br>
									<p class="new">Kondisi : Baik</p>
								</div>
								<div class="items cart">
									<!-- <i class="fa fa-shopping-cart"></i> -->
									<span>Book Ready</span>
								</div>
							</div>
						</div>
					</div>
					<!-- </div> -->
				</div>
			</div>
			
			<section class="konten">
				<div class="row">
					<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<img src="<?= BASEURL ?>/img/asset/konten.png" alt="" class="bg-konten">
						<div class="konten1">
							<img src="<?= BASEURL ?>/img/asset/Asset 7.png" alt="">
						</div>
						<div class="konten2">
							<img src="<?= BASEURL ?>/img/asset/Asset 2.png" alt="">
						</div>
					</div>
					<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="text-konten">

							<h1>Perpustakaan Skensa</h1>
							<p>Perpustakaan Skensa Menyediakan <br><span>&plusmn; 1000 buku </span> dan <span> &plusmn; 731 judul buku</span></p>

							<br><br>
							<h3>Kategori</h3>
							<div class="kategori">
								<ul>
									<li>- Agama</li>
									<li>- Teknik Informasi</li>
									<li>- Arsitetur</li>
									<li>- Fiksi</li>
								</ul>
								<ul>
									<li>- Agama</li>
									<li>- Teknik Informasi</li>
									<li>- Arsitetur</li>
									<li>- Fiksi</li>
								</ul>
								<ul>
									<li>- Agama</li>
									<li>- Teknik Informasi</li>
									<li>- Arsitetur</li>
									<li>- Fiksi</li>
								</ul>
							</div>
							<br><br>
							<h3>Deskripsi</h3>
							<br>
							<div class="deskripsi">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, doloremque necessitatibus dolores repellat sit officia a dignissimos sed minus, numquam tempora dolorum accusantium ratione laudantium iusto possimus, cum ut distinctio.</p>
							</div>
						</div>
					</div>
				</div>
				<section class="bg-komen">
					<div class="wrapper2">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="text-comment">
									<h1>Tim Pembuat Perpustakaan Skensa</h1>
									<p>Perpustakaan Skensa Telah Menyediakan Website Perpustakaan dimana kalian biasa melihat daftar buku yang ada di perpustakaan dan melihat stok buku dimana pun tanpa datang langsung </p>
									<div class="navbar navbar-footer">
										<nav>
											<ul>
												<li class="login"><a href="#">Login <img src="<?= BASEURL ?>/img/asset/login 1.png" alt="" width="20px"></a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 card-team" style="margin-left: 2.5rem">
								<section class="variable slider">
									<div class="row">
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Made Wahyu Purnama Putra</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Koordinator dan Frond end</p>
												</div>
												<div class="footer-card">
													<p>Leader <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Made Arya Dwipayana Putra</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-1 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Mohammad Tegar Asta P</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-2 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Tini Wahyuni</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-3 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Nulia Pratiwi</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-4 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Jeni Andini</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-5 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Nyoman Trinity Laksmi Maharani</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-6 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Wayan Wipram G</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-7 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xl-6">
											<div class="card">
												<div class="judul-card">
													<h1>Wayan Budi Sucita</h1>
													<div class=""></div>
													<img src="<?= BASEURL ?>/img/asset/wahyu.jpg" alt="">
												</div>
												<div class="des-card">
													<p>Sebagai Pelengkap </p>
												</div>
												<div class="footer-card">
													<p>P-8 <span>Perpustakaan Skensa</span></p>
												</div>
											</div>
										</div>
										<div class="col-xl-6">

										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="wrapper">
					<footer>
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 footer-icon">
								<h1>Perpustakaan Skensa</h1>
								<img src="<?= BASEURL ?>/img/asset/logo.png" alt="">
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 footer-judul">
								<h1>Tentang Kami</h1>
								<br>
								<ul>
									<li><a href="" class="tk">Blog</a></li>
									<li><a href="" class="tk">Berita Terbaru</a></li>
									<li class="icon">
										<i class="fab fa-facebook-square"></i>
										<i class="fab fa-instagram"></i>
										<i class="fab fa-twitter"></i>
										<i class="fab fa-youtube"></i>
									</li>
								</ul>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 footer-judul">
								<h1>Kategori</h1>
								<br>
								<ul>
									<li><a href="" class="tk">Fiksi</a></li>
									<li><a href="" class="tk">Agama</a></li>
									<li><a href="" class="tk">Pelajaran</a></li>
									<li><a href="" class="tk">Kelistrikan</a></li>
									<li><a href="" class="tk">Bangunan</a></li>
									<li><a href="" class="tk">Teknologi Infomasi</a></li>
								</ul>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12  footer-judul">
								<h1>Bantuan</h1>
								<br>
								<ul>
									<li><a href="" class="tk">FAQ</a></li>
									<li><a href="" class="tk">Hubungi Kami</a></li>
									<li><a href="http://perpustakaan.com/projek_perpustakaan/Perpustakaan_mvc/app/views/template/404.php" class="tk">Page 404 </a></li>
								</ul>
							</div>
						</div>
						<p>copyright © 2020 - Perpustakaan Skensa. All rights reserved.</p>
					</footer>
					<br>
				</section> 
			</section>

		</section>
		<script src="<?= BASEURL ?>/js/jquery.js" type="text/javascript"></script>
		<!-- <script src="<?= BASEURL ?>/vendor/jquery/jquery.min.js"></script> -->
		<script src="<?= BASEURL ?>/js/sweetalert2.all.min.js"></script>
		<script src="<?= BASEURL ?>/vendor/slick/slick.js" type="text/javascript"></script>
		<script src="<?= BASEURL ?>/js/script.js"></script>
		
		<script>
			const  flashData = $('.flash-data').data('flashdata');
			if (flashData) {
				Swal.fire({
					title: 'Perpustakaan Skensa',
					text: flashData.pesan + flashData.aksi,
					icon: flashData.tipe,
					type: flashData.tipe
				})
			} 

			$('.tombol-hapus').on('click', function(e){

				e.preventDefault();
				const href = $(this).attr('href');

				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success',
						cancelButton: 'btn btn-danger'
					},
					buttonsStyling: false
				})

				swalWithBootstrapButtons.fire({
					title: 'Yakin di Hapus?',
					text: "Data Akan Hilang Permanen",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Hapus',
					cancelButtonText: 'Batal',
					reverseButtons: true
				}).then((result) => {
					if (result.value) {
						document.location.href = href;
					} else if (
						result.dismiss === Swal.DismissReason.cancel
						) {
						swalWithBootstrapButtons.fire(
							'BATAL',
							'Data Anda Aman ',
							'error'
							)
					}
				})


			});


		</script>


		<div class="popup-wrapper" id="popup">
			<div class="popup-container">
				<div class="modal-header">
					<h5 class="modal-title" id="judul">Login Perpuskensa</h5>
					<a  href="#closed" class="close">&times;</a>
				</div>
				<form action="" method="POST" class="popup-form">
					<div class="input-group row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
							<label for="username">Username</label>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
							<input type="text" name="username" id="username" placeholder="Username" class="form-control">
						</div>
					</div>
					<div class="input-group row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
							<label for="password">Password</label>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
							<input type="password" name="password" id="password" placeholder="Password" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 lupa-pw">
							<a href="">Lupa Password ?</a>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="login" class="btn btn-primary w-100">Login</button>
					</div>
				</form>
			</div>
		</div>	
	</body>
	</html>
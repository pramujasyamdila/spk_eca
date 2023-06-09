<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

	<!-- fonst google poppins -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

	<!-- font awasome icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- internal -->
	<link rel="stylesheet" href="<?= base_url() ?>assets_landing/dist/style.css" />

	<!-- animate style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- animate on scroll -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<title>SPK | Dempster-Shafer</title>
</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top animate__animated animate__fadeInDown">
		<div class="container">
			<a class="navbar-brand fw-bold fs-4" href="#"><img src="assets/img/JMTMLOGOKU.png" alt="" width="200px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Produk dan Layanan</a>
					</li>
					<!-- <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li> -->
				</ul>

				<div class="text-white text-center">
					<a class="text-white" target="_blank" href="#"> <i class="fa-brands fa-instagram fs-5 mx-3"></i></a>
					<!-- <i class="fa-brands fa-facebook fs-5"></i> -->
				</div>
			</div>
		</div>
	</nav>
	<!-- end navbar -->

	<!-- hero -->
	<div class="hero d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- <div class="col text-center"> -->
					<h1 class="text-white fw-bold mb-4 animate__animated animate__fadeInUp">
						Selamat Datang Di
						<br />
						Sistem Pendukung Keputusan Dempster-Shafer
					</h1>

					<button class="btn btn-lg btn-primary">Masuk</button>
					<!-- <button class="btn btn-lg btn-outline-light">About Us</button> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end hero -->

	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col py-5 text-center" data-aos="fade-up" data-aos-duration="1000">
					<img src="<?= base_url('assets_landing/form.jpg') ?>" alt="">
				</div>
				<div class="col py-5 text-center" data-aos="fade-up" data-aos-duration="1000">
					<form id="form_tamu" method="post">
						<label for=""><span class="text-danger">*</span>Nama</label>
						<input type="text" name="nama" class="form-control" required>
						<br>
						<label for=""><span class="text-danger">*</span>Email</label>
						<input type="text" name="email" class="form-control" required>
						<br>
						<label for=""><span class="text-danger">*</span> Nomor Telpon / WhatsApp</label>
						<input type="text" name="no_telpon" class="form-control" required>
						<br>
						<button onclick="simpan()" type="button" class="btn btn-primary">Kirim</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end about  -->

	<!-- services -->
	<div class="services" style="margin-top:-50px" id="services">
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2 class="border-bottom pb-2">
						Produk dan<br />
						Layanan
					</h2>
				</div>
			</div>
			<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
				<div class="col" data-aos="fade-up" data-aos-duration="1000">
					<img src="assets/img/amp.jpg" class="w-100" />
					<h4 class="mt-3">HOTMIX ASPAL</h4>
					<p>
						Sebagai pelengkap sarana yang kami miliki untuk pemeliharaan periodik jalan tol, <br />
						Jasamarga Toll Road Maintenance mengolah dan memproduksi Aspal Hotmix.
					</p>
				</div>
				<div class="col" data-aos="fade-down" data-aos-duration="1000">
					<img src="assets/img/coldmix.png" class="w-100" />
					<h4 class="mt-3">COLD MIX</h4>
					<p>
						Aspal Coldmix yang juga dikenal dengan nama Aspal SCMA (Super Cold Mix Asphalt)<br />
						merupakan produk yang digunakan untuk menambal lubang yang terdapat pada jalan beraspal.
					</p>
				</div>
				<div class="col" data-aos="fade-up" data-aos-duration="1000">
					<img src="assets/img/alatberat.jpg" class="w-100" />
					<h4 class="mt-3">ALAT BERAT</h4>
					<p>
						PT Jasamarga Tollroad Maintenance memiliki armada alat berat, <br />
						yang dapat mendukung kegiatan operasional perseroan dalam setiap kegiatan pekerjaan.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end services -->

	<!-- FAQ -->
	<!-- <div class="faq">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="border-bottom fw-semibold pb-2">
						Question <br />
						From Our Users
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="accordion" data-aos="fade-down" data-aos-duration="1000" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									How To Register
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Fugiat, dicta.
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" data-aos="fade-up" data-aos-duration="1000" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
									How To Register
								</button>
							</h2>
							<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Fugiat, dicta.
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" data-aos="fade-down" data-aos-duration="1000" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
									How To Register
								</button>
							</h2>
							<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Fugiat, dicta.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="accordion" data-aos="fade-up" data-aos-duration="1000" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
									How To Register
								</button>
							</h2>
							<div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Fugiat, dicta.
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" data-aos="fade-down" data-aos-duration="1000" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
									How To Register
								</button>
							</h2>
							<div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Fugiat, dicta.
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" data-aos="fade-up" data-aos-duration="1000" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
									How To Register
								</button>
							</h2>
							<div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Fugiat, dicta.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end FAQ -->

	<!-- footer -->
	<div class="footer pt-5" style="margin-top:-50px">
		<div class="container">
			<div class="row">
				<div class="col col-lg-6 ">
					<a class="navbar-brand fw-bold fs-4" href="#"><img src="assets/img/JMTMLOGOKU.png" alt="" width="300px"></a>
					<br>
					<br>
					<p class="text-white">
						Sistem Pendukung Keputusan Dempster-Shafer </p>
				</div>
				<!-- <div class="col col-lg-3 d-flex flex-column text-white">
					<h5 class="text-white fw-bold">Link Terkait</h5>
					<a target="_blank" href="https://jmtm.co.id/" class="text-white mt-2 ">https://jmtm.co.id/</a>
					<a target="_blank" href="https://eproc.jmtm.co.id/" class="text-white mt-2 ">https://eproc.jmtm.co.id/</a>
					<a target="_blank" href="https://ecatalog.jmtm.co.id/" class="text-white mt-2 ">https://ecatalog.jmtm.co.id/</a>
				</div> -->
				<div class="col col-lg-3 d-flex flex-column">
					<h5 class="text-white fw-bold">Contact</h5>
					<a href="" class="text-white mt-2 text-decoration-none">Email :eca@gmail.com</a>
					<a href="" class="text-white mt-2 text-decoration-none">Telepon : +62 82112544345</a>
					<!-- <a href="" class="text-white-50 mt-2 text-decoration-none">@i-TechTravel (Instagram) </a> -->
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p class="text-white text-center copyright">&copy; Copyright 2023 by JMTM, All Right Reserved</p>
				</div>
			</div>
		</div>
	</div>
	<!-- endfooter -->

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- internal javascript -->
	<script src="<?= base_url() ?>assets_landing/dist/script.js"></script>
	<script src="<?= base_url() ?>assets/modules/jquery.min.js"></script>
	<script src="<?= base_url('assets/sweetalert.min.js') ?>"></script>

	<!-- animate on scroll -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<script>
		function message(title, icon, text) {
			swal({
				title: title,
				text: text,
				icon: icon,
			});
		}

		var form_tamu = $('#form_tamu')

		function simpan(params) {
			var nama = $('[name="nama"]').val()
			var email = $('[name="email"]').val()
			var no_telpon = $('[name="no_telpon"]').val()
			if (nama == '' && email == '' && no_telpon == '') {
				message('Gagal', 'warning', 'Lengkapi Data Terlebih Dahulu!')
			} else {
				$.ajax({
					method: "POST",
					url: "<?= base_url('welcome/add_tamu'); ?>",
					data: form_tamu.serialize(),
					dataType: "JSON",
					success: function(response) {
						if (response == 'success') {
							message('Berhasil', 'success', 'Data Berhasil Dikirim!')
							form_tamu[0].reset()
						}
					}
				})
				message('Berhasil', 'success', 'Data Berhasil Dikirim!')
			}

		}
	</script>
</body>

</html>
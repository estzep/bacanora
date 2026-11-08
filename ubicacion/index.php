<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="">
		<link rel="canonical" href="">
		<meta name="author" content="Qarta Online">
		<meta property="og:title" content="Bacanora Terraza">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta property="og:image:secure_url" content="">
		<meta property="og:url" content="">
		<meta property="og:site_name" content="">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="">
		<meta name="twitter:card" content="summary_large_image">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Bacanora Terraza | Ubicación</title>
		<link rel="icon" href="">
		<link rel="apple-touch-icon" href="">
		<meta name="msapplication-TileImage" content="">
		<style type="text/css">
			#index-ubicacion { background-image: url(../assets/img/bg-img-2.jpg); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; }
			#index-ubicacion section { min-height: 100vh; }
			#index-ubicacion section .container { max-width: 88%; }
			#index-ubicacion section .mapa { position: relative; height: 100%; margin-bottom: 5rem; }
			#index-ubicacion section .mapa iframe { border: 0; width: 100%; min-height: 330px; height: 100%; }

			/**********Small (sm)**********/
			@media (max-width: 767.98px) {
				#index-ubicacion section .row { flex-direction: column-reverse; }
				#index-ubicacion section .content { padding-top: 7rem; }
			}

		</style>
	</head>
	<body>
		<?php $ubicacion_path = 'href=""' ?>
		<?php require("../includes/nav.php");?>
		<main id="index-ubicacion">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="mapa">
								<div class="decor-line"></div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.7355284967346!2d-99.16230007081369!3d19.414906899180874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff83061f0249%3A0xc13634dd4db502ac!2sBacanora%20Terraza!5e0!3m2!1ses-419!2smx!4v1630954304355!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="content">
								<h2 class="title">Ubicación</h2>
								<img src="../assets/img/logo-flip.png" alt="logo" class="icon">
								<p class="text mb-5">
									Tonalá 144, Roma Nte, Cuauhtémoc,
									<br>
									06700 Ciudad de México, CDMX.
								</p>
								<a href="https://goo.gl/maps/4ydwHQphDFzY5vmp8" target="_blank" class="btn-type-2">Ver en Google Maps<img src="../assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php require("../includes/footer.php");?>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src=""></script>
		<script type="text/javascript">
			var wHeight = window.innerHeight;

			function nav() {
				var nav = document.getElementsByTagName("nav")[0];
				var toggler = document.getElementById("nav-toggler");
				var scrollPos = window.pageYOffset;
				var screenWidth = window.innerWidth;
				if (screenWidth <= 991.98) {
					if (toggler.classList.contains("open")) {
						nav.classList.remove("open");
						toggler.classList.remove("open");
					} else {
						nav.classList.add("open");
						toggler.classList.add("open");
					}
				}
			}

			function slideTo(place) {
			  $('html, body').animate({
			    scrollTop: $(place).offset().top - 60
			  }, 1000);
			}
		</script>
	</body>
</html>
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
		<title>Bacanora Terraza | Reservación</title>
		<link rel="icon" href="">
		<link rel="apple-touch-icon" href="">
		<meta name="msapplication-TileImage" content="">
		<style type="text/css">
			#index-contacto { background-image: url(../assets/img/bg-img-2.jpg); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; }
			#index-contacto section { min-height: 100vh; align-items: flex-start; }
			#index-contacto section .content { padding-top: 7rem; }
			#index-contacto section form {  }
			#index-contacto section form .form-group { margin-bottom: .5rem; }
			#index-contacto section form :is(input, textarea, select) { outline: none; border-radius: 0; border: 1px solid var(--white); background: rgba(51, 28, 18, .6); color: var(--white); font-family: 'Gotham', sans-serif; font-weight: 500; display: block; width: 100%; padding: .5rem 1rem; line-height: 1; font-size: 1rem; }
			#index-contacto section form :is(input, textarea, select)::placeholder { opacity: .9; color: var(--white); }

			.link-type-1 { color: var(--white); text-decoration: underline; transition: 0.5s; }
			.link-type-1:hover { color: var(--amarillo); }

			/**********Small (sm)**********/
			@media (max-width: 767.98px) {}

		</style>
	</head>
	<body>
		<?php $reservacion_path = 'href=""' ?>
		<?php require("../includes/nav.php");?>
		<main id="index-contacto">
			<section>
				<div class="container">
					<div class="content">
						<h2 class="title">Reservación</h2>
						<img src="../assets/img/logo-flip.png" alt="logo" class="icon">
						<p class="text mb-5">
							Reserva a través de nuestro formulario
							<br>
							por WhatsApp o márcanos a nuestro número
							<br>
							<br>
							<a href="tel:5523425452" class="link-type-1">(55) 2342 5452</a>
						</p>
						<form>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input name="date" type="date" min="" max="" placeholder="Fecha">
								</div>
								<div class="form-group col-12 col-md-6">
									<input name="time" type="time" min="" max="" placeholder="Hora">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input name="nopersonas" type="number" placeholder="No. personas">
								</div>
								<div class="form-group col-12 col-md-6">
									<select class="form-control" id="exampleFormControlSelect1">
								      <option>Área</option>
								      <option>2</option>
								      <option>3</option>
								      <option>4</option>
								      <option>5</option>
								    </select>
									<!-- <input name="area" type="text" placeholder="Área"> -->
								</div>
							</div>
							<br>
							<div class="form-group">
								<input name="name" type="text" placeholder="Nombre y apellido">
							</div>
							<div class="form-group">
								<input name="tel" type="tel" placeholder="Teléfono">
							</div>
							<br>
							<a href="javascript:;" class="btn-type-1">Reservar por WhatsApp<img src="../assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
						</form>
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
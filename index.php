<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="index, follow">
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
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Bacanora Terraza | Inicio</title>
		<link rel="icon" href="assets/icons/logo-adorno@2x.png">
		<link rel="apple-touch-icon" href="">
		<meta name="msapplication-TileImage" content="">
	</head>
	<body>
		<?php $slideto = 'header' ?>
		<?php $path = '/' ?>
		<?php $nav_class = 'appear' ?>
		<?php $logo_class = 'logo active' ?>
		<?php $logo_path = 'href="javascript:;" onclick="slideTo(`header`); nav();"' ?>
		<?php $nosotros_path = 'href="javascript:;" onclick="slideTo(`#nosotros`); nav();"' ?>
		<?php $menu_path = 'href="javascript:;" onclick="slideTo(`#menu`); nav();"' ?>
		<?php $eventos_path = 'href="javascript:;" onclick="slideTo(`#eventos`); nav();"' ?>
		<?php $galeria_path = 'href="javascript:;" onclick="slideTo(`#galeria`); nav();"' ?>
		<?php $ubicacion_path = 'href="ubicacion"' ?>
		<?php $contacto_path = 'href="contacto"' ?>
		<?php $reservacion_path = 'href="https://www.opentable.com.mx/r/bacanora-terraza-ciudad-de-mexico" target="_blank"' ?>
		<?php require("includes/nav.php");?>
		<section id="prox-evento" class="appear">
			<div class="preview">
				<h3 class="title">
					Próximo
					<br>
					<span class="big">Evento</span>
				</h3>
				<h4 id="nextProxEvento" class="sub-title">
					Evento
				</h4>
				<a href="javascript:;" onclick="proxEvento()" class="btn-type-4">Ver más<img src="assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
			</div>
			<div class="view">
				<div class="container py-4">
					<a href="javascript:;" onclick="proxEvento()" class="cerrar">
						<img src="assets/icons/close.svg">
					</a>
					<h2 class="title">Próximo<br><span class="big">Evento</span></h2>	
					<div id="evento-carousel" class="carousel" data-ismoving="true">
						<div class="carousel-inner"></div>
						<div class="fixed-text">
							<a href="https://goo.gl/maps/4ydwHQphDFzY5vmp8" target="_blank" class="text">
								Tonalá 144, Roma Nte., Cuauhtémoc,
								<br>
								06700 Ciudad de México, CDMX
							</a>
							<a href="https://www.opentable.com.mx/r/bacanora-terraza-ciudad-de-mexico" target="_blank" class="btn-type-5">Reservar<img src="assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
						</div>
						<a href="javascript:;" onclick="eventoCarousel(this)" class="carousel-control carousel-control-prev prev" role="button" data-slide="prev">
							<img src="assets/icons/flechitas-left.svg">
						</a>
						<a href="javascript:;" onclick="eventoCarousel(this)" class="carousel-control carousel-control-next next" role="button" data-slide="next">
							<img src="assets/icons/flechitas-right.svg">
						</a>
					</div>
				</div>
			</div>
		</section>
		<header></header>
		<main>
			<section id="nosotros">
				<div class="container">
					<div class="content">
			    		<h2 class="title appear">El auténtico sabor<br>tradicional de Sonora</h2>
			    		<img src="assets/img/logo-flip.png" alt="logo" class="icon">
			    		<p class="text appear mb-5">
			                Minucioso cuidado al detalle, servicio excepcional y especial atención a la selección de cada ingrediente, es aquello que distingue a nuestra propuesta culinaria.<br>En nuestro menú encontrarás platillos selectos con los mejores cortes de carne del mundo, así como losmás exóticos productos del mar.
			            </p>
			            <a href="nosotros" class="btn-type-1 appear">Leer más<img src="assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
		    		</div>
				</div>
			</section>
			<section id="menu">
			    <div class="container">
			        <div class="row">
			            <div class="col-12 col-md-6">
			            	<div class="content">
			            		<h2 class="title appear">Nuestro<br>menú</h2>
			            		<img src="assets/img/logo-flip.png" alt="logo" class="icon">
			            		<p class="text mb-5 appear">
			            			Nuestros platillos están elaborados con los ingredientes de la más alta calidad provenientes de diferentes regiones de Sonora.
			            			<br>
			            			Nuestra carne es baja en grasas y alta en proteínas. Ideal para disfrutar en una tarde entre amigos.
			            		</p>
			            		<a href="menu" class="btn-type-2 appear">Ver menú<img src="assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
			            	</div>
			            </div>
			            <div class="col-12 col-md-6 outer-img-type-1">
			            	<div class="content-img-type-1">
			            		<div class="decor-line appear" data-duration="1600"></div>
			            		<img src="assets/img/13.jpeg" alt="Imagen carne Bacanora Terraza" class="img-type-1"> 
			            	</div>
			            </div>
			        </div>
			    </div>
			</section>
			<section id="eventos">
				<div class="container">
					<div class="content dark pb-3">
						<h2 class="title appear">Eventos<br>Privados</h2>
						<img src="assets/img/logo-flip.png" alt="logo" class="icon">
					</div>
					<div class="row">
						<div class="col-12 col-sm-6">
							<img src="assets/img/3.jpeg" class="img-type-2 appear">
						</div>
						<div class="col-12 col-sm-6">
							<img src="assets/img/11.jpeg" class="img-type-2 appear">
						</div>
						<div class="col-12 col-sm-6 d-none d-sm-block">
							<img src="assets/img/5.jpeg" class="img-type-2 appear">
						</div>
						<div class="col-12 col-sm-6 d-none d-sm-block">
							<img src="assets/img/4.jpeg" class="img-type-2 appear">
						</div>
					</div>
					<div class="content dark">
						<p class="text mb-5 appear">
							Reserva tu lugar en Bacanora para eventos privados. Disfruta de la terraza al aire libre con tus amigos y familiares.
							<br>
							Máximo de 60 personas.
							<br>
							<br>
							Reservaciones por WhatsApp
						</p>
						<a href="contacto" class="btn-type-2 appear">Reservar<img src="assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
					</div>
				</div>
			</section>
			<section id="galeria">
				<div class="container">
					<div class="row sp-row">
						<div class="col-12 col-md-7">
							<div class="carousel-outer">
								<div class="decor-line appear" data-duration="1600"></div>
								<div id="galeria-carousel" class="carousel slide big" data-interval="false" data-keyboard="false" data-touch="false">
									<div class="carousel-inner appear">
										<div class="carousel-item active">
									      <img src="assets/img/8.jpeg" alt="...">
									    </div>
									    <div class="carousel-item">
									      <img src="assets/img/13.jpeg" alt="...">
									    </div>
									    <div class="carousel-item">
									      <img src="assets/img/12.jpeg" alt="...">
									    </div>
									</div>
									<a href="#galeria-carousel" onclick="galCarousel('prev')" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
									    <img src="assets/icons/flechitas-left.svg">
									  </a>
									  <a href="#galeria-carousel" onclick="galCarousel('next')" class="carousel-control carousel-control-next" role="button" data-slide="next" style="margin-right: 1.5rem;">
									    <img src="assets/icons/flechitas-right.svg">
									  </a>
								</div>
								<div id="small-galeria-carousel" class="carousel slide small">
									<div class="carousel-item appear" style="transition: 0.8s;">
										<img src="assets/img/8.jpeg" alt="...">
										<img src="assets/img/13.jpeg" alt="..." class="active">
										<img src="assets/img/12.jpeg" alt="...">
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5">
							<div class="content">
								<h2 class="title appear">Galería</h2>
								<img src="assets/img/logo-flip.png" alt="logo" class="icon">
								<p class="text mb-5 appear">
									Conoce los mejores cortes traídos desde Sonora, en un ambiente relajado y casual en la colonia Roma.
								</p>
								<a href="galeria" class="btn-type-1 appear">Galería<img src="assets/icons/flechitas-right.svg" alt="flechas" class="flechas"></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php require("includes/footer.php");?>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src=""></script>
		<script type="text/javascript">

			const req = new Request('http://bacanoraterraza.mx/aaeventos/prox-eventos.json');
			fetch(req)
				.then(response => response.json())
				.then(data => {
					console.log("start");
					var eventoCarousel = document.getElementById("evento-carousel");
					var eventoCarouselInner = eventoCarousel.getElementsByClassName("carousel-inner")[0];
					var proxeventos = data.proxeventos;
					for (var i = 0; i < 4; i++) {
						evento = Object.values(proxeventos)[i];
						title = evento.title;
						var description = evento.description;
						var hour = evento.hour;
						var img = evento.img;
						var elem = `<div class="carousel-item">
							<div class="carousel-img">
								<img src="aaeventos/` + img + `">
							</div>
							<p class="text">` + description + `</p>
							<p class="text description">` + hour + `</p>
						</div>`;
						if (title != "") {
							eventoCarouselInner.insertAdjacentHTML('beforeend', elem);
						}
					}
					var nextProxEvento = document.getElementById("nextProxEvento");
					var evento1title = data.proxeventos.evento1.title;
					nextProxEvento.innerHTML = evento1title;
					createEventoCarousel();
					console.log("end");
				});
			function createEventoCarousel() {
				var proxEvento = document.getElementById("prox-evento");
				var eventoCarousel = document.getElementById("evento-carousel");
				var eventoCarouselInner = document.getElementsByClassName("carousel-inner")[0];
				var items = eventoCarousel.getElementsByClassName("carousel-item");
				if (items.length == 0) {
					proxEvento.classList.add("d-none");
				} else if (items.length == 1) {
					var elem = `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[0].innerHTML +`</div>`;
				} else if (items.length == 2) {
					var elem = `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[1].innerHTML +`</div>` + `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[1].innerHTML +`</div>`;
				} else if (items.length == 3) {
					var elem = `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[1].innerHTML +`</div>` + `<div class="carousel-item">`+ items[2].innerHTML +`</div>` + `<div class="carousel-item">`+ items[2].innerHTML +`</div>`;
				} else if (items.length == 4) {
					var elem = `<div class="carousel-item">`+ items[0].innerHTML +`</div>` + `<div class="carousel-item">`+ items[1].innerHTML +`</div>` + `<div class="carousel-item">`+ items[2].innerHTML +`</div>` + `<div class="carousel-item">`+ items[3].innerHTML +`</div>`;
				} else {
					console.log("Error generando los próximos eventos");
				}
				eventoCarouselInner.innerHTML = elem;
				items[0].classList.add("active");
				items[1].classList.add("next");
				items[3].classList.add("prev");
				for (var i = 0; i < items.length; i++) {
					items[i].setAttribute("onclick", "eventoCarousel(this)");
				}
			}


			var wHeight = window.innerHeight;
			var proxEv = document.getElementById("prox-evento");
			var hLogo = document.getElementsByTagName("nav")[0].getElementsByClassName("logo")[0];

			appearEffect();
			function appearEffect() {
				var appear = document.getElementsByClassName("appear");
				var array = [];
				for (var i = 0; i < appear.length; i++) {
					array.push(appear[i].getBoundingClientRect().top);
					sessionStorage.setItem("array",array);
				}
				sessionStorage.setItem("array",array);
				for (var j = 0; j < appear.length; j++) {
					var elTop = array[j];
					if (window.pageYOffset + (window.innerHeight) >= elTop) {
						appear[j].classList.add("show");
					}
				}
			}

			function eventoCarousel(that) {
				if (that.classList.contains("next")) {
					var move = 'next';
				} else if (that.classList.contains("prev")) {
					var move = 'prev';
				} else {
					var move = '';
				}
				var carousel = document.getElementById("evento-carousel");
				var ismoving = carousel.getAttribute("data-ismoving");
				var item = carousel.getElementsByClassName("carousel-item");
				if (ismoving == "true") {
					carousel.setAttribute("data-ismoving", false);
					if (move == "next") {
						for (var i = 0; i < item.length; i++) {
							if (item[i].classList.contains("active")) {
								item[i].classList.add("prev");
								item[i].classList.add("moving-next");
								var n = i
								setTimeout(function() {
									item[n].classList.remove("active");
									item[n].classList.remove("moving-next");
								}, 600);
							} else if (item[i].classList.contains("next")) {
								var m = i
								item[i].classList.add("moving-next");
								setTimeout(function() {
									item[m].style.transition = "0s"
									item[m].classList.remove("next");
									item[m].classList.add("active");
									item[m].classList.remove("moving-next");
								}, 600);
								setTimeout(function() {
									item[m].style.transition = "0.6s"
								}, 650);
							} else if (item[i].classList.contains("prev")) {
								item[i].classList.add("moving-next");
								var o = i;
								setTimeout(function() {
									item[o].classList.remove("prev");
									item[o].classList.remove("moving-next");
								}, 600);
							} else {
								item[i].classList.add("prox");
								var p = i;
								setTimeout(function() {
									item[p].classList.add("next");
									item[p].classList.remove("prox");
								}, 1);
							}
						}
					} else if (move == "prev") {
						for (var i = 0; i < item.length; i++) {
							if (item[i].classList.contains("active")) {
								item[i].classList.add("next");
								item[i].classList.add("moving-prev");
								var n = i
								setTimeout(function() {
									item[n].style.transition = "0s"
									item[n].classList.remove("active");
									item[n].classList.remove("moving-prev");
								}, 600);
								setTimeout(function() {
									item[n].style.transition = "0.6s"
								}, 650);
							} else if (item[i].classList.contains("prev")) {
								item[i].classList.add("active");
								item[i].classList.remove("prev");
							} else if (item[i].classList.contains("next")) {
								item[i].classList.add("moving-prev");
								var o = i;
								setTimeout(function() {
									item[o].classList.remove("next");
									item[o].classList.remove("moving-prev");
								}, 600);
							} else {
								item[i].classList.add("prox-2");
								var p = i;
								setTimeout(function() {
									item[p].classList.add("prev");
									item[p].classList.remove("prox-2");
								}, 1);
							}
						}
					}
					setTimeout(function() {
						carousel.setAttribute("data-ismoving", true);
					}, 650);
				}
			}

			window.onscroll = function() {
				var toggler = document.getElementById("nav-toggler");
				var scrollPos = window.pageYOffset;
				if (!toggler.classList.contains("open")) {
					if (scrollPos > (wHeight / 6)) {
					  hLogo.classList.remove("active");
					} else {
					  hLogo.classList.add("active");
					}
				}
				if (scrollPos > (wHeight / 4)) {
				  proxEv.classList.add("hide");
				} else {
				  proxEv.classList.remove("hide");
				}
				var appear = document.getElementsByClassName("appear");
				var array = (sessionStorage.getItem("array")).split(",");
				var scrollPos = window.pageYOffset + (window.innerHeight * 0.8);
				for (var i = 0; i < appear.length; i++) {
					var elTop = array[i];
					if (!appear[i].classList.contains("show") && scrollPos >= elTop) {
						appear[i].classList.add("show");
					}
				}
			}
			window.addEventListener("resize", appearEffect);

			var appear = document.getElementsByClassName("appear");
			for (var i = 0; i < appear.length; i++) {
				var appearon = appear[i].getAttribute("data-appearon") || "0.5";
				var entry = appear[i].getAttribute("data-entry") || "once";
				var duration = appear[i].getAttribute("data-duration") || "800";
				var delay = appear[i].getAttribute("data-delay") || "0";

				// data entry == once || fromtop || frombottom || always
				appear[i].style.transitionDuration = duration + "ms";
				appear[i].style.transitionDelay = delay + "ms";
			}

			function nav() {
				var nav = document.getElementsByTagName("nav")[0];
				var toggler = document.getElementById("nav-toggler");
				var logo = nav.getElementsByClassName("logo")[0];
				var scrollPos = window.pageYOffset;
				var screenWidth = window.innerWidth;
				if (screenWidth <= 991.98) {
					if (toggler.classList.contains("open")) {
						if (scrollPos > (wHeight / 6)) {
						  hLogo.classList.remove("active");
						} else {
						  hLogo.classList.add("active");
						}
						nav.classList.remove("open");
						toggler.classList.remove("open");
					} else {
						logo.classList.remove("active");
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
			function proxEvento() {
				var body = document.getElementsByTagName("body")[0];
				var prox = document.getElementById("prox-evento");
				if (prox.classList.contains("active")) {
					prox.classList.add("change-2");
					body.classList.remove("darken");
					setTimeout(function(){
						prox.classList.remove("change-2");
						prox.classList.remove("active");
					}, 800);
				} else {
					prox.classList.add("change");
					body.classList.add("darken");
					setTimeout(function(){
						prox.classList.add("active");
						prox.classList.remove("change");
					}, 800);
				}
			}
			function galCarousel(dir) {
				var big = document.getElementById("galeria-carousel");
				var small = document.getElementById("small-galeria-carousel");
				var sImgs = small.getElementsByTagName("img");
				for (var i = 0; i < sImgs.length; i++) {
					var img = sImgs[i];
					if (img.classList.contains("active")) {
						var prev = img.previousElementSibling;
						var next = img.nextElementSibling;
						if (next == null) {
							next = sImgs[0];
						}
						if (prev == null) {
							prev = sImgs[sImgs.length - 1];
						}
						if (dir == 'next') {
							next.classList.add("next-active");
							img.classList.add("car-goL");
							next.classList.add("car-goL");
							setTimeout(function() {
								img.classList.remove("active");
								next.classList.remove("next-active");
								next.classList.remove("car-goL");
								img.classList.remove("car-goL");
								next.classList.add("active");
							}, 600);
						} else {
							prev.classList.add("prev-active");
							setTimeout(function() {
								prev.classList.add("car-goR");
							}, 50);
							setTimeout(function() {
								img.classList.remove("active");
								prev.classList.remove("prev-active");
								prev.classList.remove("car-goR");
								prev.classList.add("active");
							}, 600);
						}
						break;
					}
				}
			}
		</script>
	</body>
</html>
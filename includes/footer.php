<?php if ($slideto == "") {
	$slideto = 'main';
}
if ($path == "") {
	$path = '../';
} else if($path == "/") {
	$path = '';
}
 ?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="javascript:;" onclick="slideTo('<?php echo($slideto); ?>');" class="text btn-type-3">
					<img src="<?php echo($path); ?>assets/icons/flechitas-up.svg" class="flechas">
					<br>
					Regresar al inicio
				</a>
			</div>
			<div class="col-12 col-md-4">
				<h3 class="title">Ubicación</h3>
				<a href="https://goo.gl/maps/4ydwHQphDFzY5vmp8" target="_blank" class="text">Calle Tonalá 144. Roma Norte CD México.</a>
			</div>
			<div class="col-12 col-md-4">
				<h3 class="title">Horario</h3>
				<p class="text mb-md-5">
					Lunes a miércoles
					<br>
					13:00 hrs. a 22:30 hrs.
					<br>
					<br>
					Jueves y viernes
					<br>
					13:00 hrs. a 01:00 hrs.
					<br>
					<br>
					Sábado
					<br>
					09:30 hrs. a 01:00 hrs.
					<br>
					<br>
					Domingo
					<br>
					09:30 hrs. a 19:00 hrs.
				</p>
			</div>
			<div class="col-12 col-md-4">
				<h3 class="title">Contacto</h3>
				<a href="tel:5549366942" class="text">(55) 4936 6942</a>
				<br>
				<a href="email:bacanoraterraza@gmail.com" class="text">bacanoraterraza@gmail.com</a>
			</div>
			<div class="col-12" style="padding-bottom: 7rem;">
				<h3 class="title mb-0">Redes Sociales</h3>
				<a href="https://www.facebook.com/Bacanora-Terraza-102675342053119" target="_blank" class="icon"><img src="<?php echo($path); ?>assets/icons/facebook-circular-logo.svg"></a>
				<a href="https://www.instagram.com/bacanoraterraza/" target="_blank" class="icon"><img src="<?php echo($path); ?>assets/icons/instagram.svg"></a>
				<a href="https://wa.me/+525549366942" target="_blank" class="icon"><img src="<?php echo($path); ?>assets/icons/whatsapp.svg"></a>
			</div>
		</div>
		<div class="row sp-row">
			<div class="col-12 col-sm-8 text-center text-sm-left">
				<p class="text">Copyright Bacanora Terraza 2021 Derechos reservados | Diseñado y desarrollado por <a href="https://qartaonline.com" target="_blank" class="qartaonline">Qarta Online</a></p>
			</div>
			<div class="col-12 col-sm-4 text-center text-sm-right">
				<img src="<?php echo($path); ?>assets/img/logo-full.png" class="logo">
			</div>
		</div>
	</div>
</footer>
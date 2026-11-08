<?php
if ($path == "") {
	$path = '../';
} else if($path == "/") {
	$path = '';
}
if ($logo_class == "") {
	$logo_class = 'logo';
}
if ($logo_path == "") {
	$logo_path = 'href=".."';
}
if ($nosotros_path == "") {
	$nosotros_path = 'href="..#nosotros"';
}
if ($menu_path == "") {
	$menu_path = 'href="..#menu"';
}
if ($eventos_path == "") {
	$eventos_path = 'href="..#eventos"';
}
if ($galeria_path == "") {
	$galeria_path = 'href="..#galeria"';
}
if ($ubicacion_path == "") {
	$ubicacion_path = 'href="../ubicacion"';
}
if ($contacto_path == "") {
	$contacto_path = 'href="../contacto"';
}
if ($reservacion_path == "") {
	$reservacion_path = 'href="https://www.opentable.com.mx/r/bacanora-terraza-ciudad-de-mexico" target="_blank"';
}
?>
<nav class="<?php echo($nav_class); ?>">
	<div class="container">
		<a <?php echo($logo_path); ?> class="<?php echo($logo_class); ?>"><img src="<?php echo($path); ?>assets/img/logo-full.png"></a>
		<a href="javascript:;" id="nav-toggler" onclick="nav()">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</a>
		<ul>
			<li><a <?php echo($nosotros_path); ?>>Nosotros</a></li>
			<li><a <?php echo($menu_path); ?>>Menú</a></li>
			<li><a <?php echo($eventos_path); ?>>Eventos</a></li>
			<li><a <?php echo($galeria_path); ?>>Galería</a></li>
			<li><a <?php echo($ubicacion_path); ?>>Ubicación</a></li>
			<li><a <?php echo($contacto_path); ?>>Contacto</a></li>
			<li class="wbtn"><a <?php echo($reservacion_path); ?> class="btn-type-1">Reservar</a></li>
		</ul>
	</div>
</nav>
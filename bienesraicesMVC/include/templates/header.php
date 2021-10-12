
<?php
if(!isset($_SESSION)){

	session_start();
}

$auth = $_SESSION["login"] ?? false;


?>

<!DOCTYPE html>
 <html lang = "en" >

 <head>
        <meta charset = "UTF-8" >
        <meta name = "viewport"
        content = "width=device-width, initial-scale=1.0" >
        <title >Bienes Raíces</title>
        <link rel = "stylesheet" href= '/bienesraices/build/css/app.css' >

		<meta http-equiv="Expires" content="0">
		<meta http-equiv="Last-Modified" content="0">
		<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
		<meta http-equiv="Pragma" content="no-cache">

        </head>
		 <body>
			<header class="header <?php echo $inicio?'inicio':'';?>" >
				<div class="contenedor contenido-header">

					<div class="barra">

						<a href="index.php">
						<img src="/bienesraices/build/img/logo.svg" alt="logotipo-bienesraíces">
						</a>

						<div class="mobile-menu">

								<img src="/bienesraices/build/img/barras.svg" alt="Menu Respponsive">

						</div>
						<div class="derecha">
							<img class="dark-move-boton" src="/bienesraices/build/img/dark-mode.svg" alt="boton dark-move">

							<nav class="navegacion">
								<a href="nosotros.php">Nosotros</a>
								<a href="anuncios.php">Anuncios</a>
								<a href="blog.php">Blog</a>
								<a href="contacto.php">Contacto</a>
								<?php if($auth):?>

									<a href="cerrar-sesion.php">Cerrar Sesion</a>

								<?php endif ?>
							</nav>

						</div>


					</div><!--barra-->


						<?php

							if($inicio){

								echo"<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>";

							}

						?>

				</div>
			</header>
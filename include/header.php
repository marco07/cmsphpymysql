<?php 
	include('config.inc');
	
	$cnn = mysqli_connect($server, $user, $pwd, $database);
	mysqli_set_charset($cnn,"utf8");

	$nav = "SELECT * FROM navegacion LIMIT 5";
	$resultnav = mysqli_query($cnn, $nav);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>The restaurant</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="description" content="Mantenemos cada día el compromiso de servir y preparar cada plato con calidad excepcional y ofrecer a cada uno de nuestros huéspedes un servicio personalizado" />
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/icono.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<header>
		<!--menu principal-->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a href="#"><img src="img/logo.png"></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarCollapse">
	        	<ul class="navbar-nav justify-content-end">
	        		<?php
	        			while($row = mysqli_fetch_array($resultnav)){
		        		 echo '<li class="nav-item">';
		        			echo '<a href="'.$row['url'].'" class="nav-link"> <i class="'.$row['icono'].'"></i> '.$row['opcion'].'</a>';
		        		echo '</li>';
	        		}
	        		?>
	        	</ul>
	        	
	        </div>

		</nav>
	</header>
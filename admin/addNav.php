<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$opcion = $_POST['opcion'] ;
	$url = $_POST['url']  ;
	$icono = $_POST['icono'] ;


	$peticion ="INSERT INTO navegacion(id, opcion, url, icono) values(null, '".$opcion."', '".$url."', '".$icono."')";

	$resultado = mysqli_query($conexion, $peticion);

	header('Location:principal.php?menu=2');


?>
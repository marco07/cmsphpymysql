<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$titulo = $_POST['titulo'] ;
	$precio = $_POST['precio']  ;
	$descripcion = $_POST['descripcion'] ;
	$url = $_POST['url'] ;

	$peticion ="INSERT INTO combo(id, titulo, precio, descripcion, url) values(null, '".$titulo."', '".$precio."', '".$descripcion."','".$url."' )";

	$resultado = mysqli_query($conexion, $peticion);

	header('Location:principal.php?menu=3');


?>
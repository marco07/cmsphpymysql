<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$id = $_POST['id'];
	$opcion = $_POST['opcion'] ;
	$url = $_POST['url']  ;
	$icono = $_POST['icono'] ;


	$peticion = "UPDATE navegacion SET opcion = '".$opcion."', url='".$url."',icono='".$icono."' WHERE id= $id";

	$resultado = mysqli_query($conexion,$peticion);

	header('Location:principal.php?menu=2');
?>


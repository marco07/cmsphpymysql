<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$id = $_POST['id'];
	$titulo = $_POST['titulo'] ;
	$precio = $_POST['precio']  ;
	$descripcion = $_POST['descripcion'] ;
	$url = $_POST['url'] ;

	$peticion = "UPDATE combo SET titulo = '".$titulo."', precio='".$precio."',descripcion='".$descripcion."',url='".$url."' WHERE id= $id";

	$resultado = mysqli_query($conexion,$peticion);

	header('Location:principal.php?menu=3');
?>


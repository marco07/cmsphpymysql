<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$id = $_POST['id'];
	$imagen = $_FILES['imagen']['name'];
	$target = "../img/".basename($imagen);
	$upload = move_uploaded_file($_FILES['imagen']['tmp_name'], $target);

	$detalle = $_POST['detalle']  ;

	$urlDetalle = $_POST['urlDetalle'] ;
	$urlReservar = $_POST['urlReservar'] ;
	$tiempoPreparacion = $_POST['tiempoPreparacion'] ;


	$peticion = "UPDATE platos SET imagen = '".$imagen."', detalle='".$detalle."',urlDetalle='".$urlDetalle."',urlReservar='".$urlReservar."',tiempoPreparacion='".$tiempoPreparacion."' WHERE id= $id";

	$resultado = mysqli_query($conexion,$peticion);

	header('Location:principal.php?menu=6');
?>


<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');
	$id = $_GET['id'];

	$peticion = "DELETE FROM platos WHERE id=$id";
	$resultado = mysqli_query($conexion,$peticion);

	header('Location:principal.php?menu=6');
?>
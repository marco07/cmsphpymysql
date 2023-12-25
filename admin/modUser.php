<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$id = $_POST['id'];
	$username = $_POST['username'] ;
	$password = $_POST['password']  ;
	$name = $_POST['name'] ;
	$email = $_POST['email'] ;

	$peticion = "UPDATE usuario SET username = '".$username."', password='".$password."',name='".$name."',email='".$email."' WHERE id= $id";

	$resultado = mysqli_query($conexion,$peticion);

	header('Location:principal.php?menu=1');
?>


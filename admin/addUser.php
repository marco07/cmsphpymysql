<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$username = $_POST['username'] ;
	$password = $_POST['password']  ;
	$name = $_POST['name'] ;
	$email = $_POST['email'] ;

	$peticion ="INSERT INTO usuario(id, username, password, name, email) values(null, '".$username."', '".$password."', '".$name."','".$email."' )";

	$resultado = mysqli_query($conexion, $peticion);

	header('Location:principal.php?menu=1');


?>
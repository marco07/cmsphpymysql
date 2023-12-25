<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$titulo = $_POST['titulo'] ;
	$descripcion = $_POST['descripcion'] ;
	$imagen = $_FILES['imagen']['name'];
	$target = "../img/".basename($imagen);
	$upload = move_uploaded_file($_FILES['imagen']['tmp_name'], $target);

	$peticion ="INSERT INTO empresa(id, titulo, descripcion, imagen) values(null, '".$titulo."', '".$descripcion."','".$imagen."' )";

	$resultado = mysqli_query($conexion, $peticion);

	header('Location:principal.php?menu=5');


?>
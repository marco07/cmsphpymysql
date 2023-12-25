<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$id = $_POST['id'];
	$titulo = $_POST['titulo'] ;
	$descripcion = $_POST['descripcion']  ;
	$imagen = $_FILES['imagen']['name'];
	$target = "../img/".basename($imagen);
	$upload = move_uploaded_file($_FILES['imagen']['tmp_name'], $target);

	$clase = $_POST['clase'] ;
	$textoBoton = $_POST['textoBoton'] ;
	$url = $_POST['url'] ;
	$activado = $_POST['activado'] ;

	$peticion = "UPDATE slider SET titulo = '".$titulo."', descripcion='".$descripcion."',imagen='".$imagen."',clase='".$clase."',textoBoton='".$textoBoton."',url='".$url."',activado='".$activado."' WHERE id= $id";

	$resultado = mysqli_query($conexion,$peticion);

	header('Location:principal.php?menu=4');
?>


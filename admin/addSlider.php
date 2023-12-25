<?php
	//variables de conexion a la bd
	include('include/headerAdmin.php');

	//obtener valores del formulario
	$titulo = $_POST['titulo'] ;
	$descripcion = $_POST['descripcion']  ;
	$imagen = $_FILES['imagen']['name'];
	$target = "../img/".basename($imagen);
	$upload = move_uploaded_file($_FILES['imagen']['tmp_name'], $target);

	$clase = $_POST['clase'] ;
	$textoBoton = $_POST['textoBoton'] ;
	$url = $_POST['url'] ;
	$activado = $_POST['activado'] ;

	$peticion ="INSERT INTO slider(id, titulo, descripcion, imagen,clase,textoBoton, url,activado) values(null, '".$titulo."', '".$descripcion."', '".$imagen."','".$clase."','".$textoBoton."','".$url."','".$activado."'  )";

	$resultado = mysqli_query($conexion, $peticion);

	header('Location:principal.php?menu=4');


?>
<?php

session_start(); 
  include('../include/config.inc');
    $conexion = mysqli_connect($server, $user, $pwd,$database);
    mysqli_set_charset($conexion, "utf8");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/icono.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">THE RESTAURANT</a>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">
        Hola, <?php echo $_SESSION['name'] ?>
      </a>
    </li>
  </ul>
</nav>

<div class="container-fluid" style="margin-top: 40px">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="principal.php?menu=1">
            	<span class="glyphicon glyphicon-user"></span> Usuarios 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="principal.php?menu=2">
            	<span class="glyphicon glyphicon-th-list"></span> Navegación 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="principal.php?menu=4">
            	<span class="glyphicon glyphicon-tasks"></span> Slider 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="principal.php?menu=3">
            	<span class="glyphicon glyphicon-blackboard"></span> Combo 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">
            	<span class="glyphicon glyphicon-check"></span> Platos 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="principal.php?menu=5">
            	<span class="glyphicon glyphicon-briefcase"></span> Empresa 
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link active" href="cerrar.php">
              <span class="glyphicon glyphicon-log-out"></span> Salir 
            </a>
          </li>

      
        </ul>
      </div>
    </nav>
<link rel="stylesheet" type="text/css" href="css/popup_style.css">
<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];


	include('../include/config.inc');

	$cnn = mysqli_connect($server,$user, $pwd, $database);

	$peticion = "SELECT * FROM usuario WHERE email = '$email' AND password='$password'";

	$resultado = mysqli_query($cnn, $peticion);
	if ($resultado->num_rows == 1) {
		$valor = $resultado->fetch_assoc();

		$id = $valor['id'];

		//set session

		$_SESSION['id'] = $id;
		$_SESSION['username'] = $valor['username'];
		$_SESSION['name'] = $valor['name'];

 ?>

    <div class="popup popup--icon -success js_success-popup popup--visible">
          <div class="popup__background"></div>
          <div class="popup__content">
            <h3 class="popup__content__title">
              Login
              </h1>
              <p>Acceso Exitoso</p>
              <p>

                <?php echo "<script>setTimeout(\"location.href = 'principal.php';\",1500);</script>"; ?>
              </p>
          </div>
        </div>

<?php } else { ?>
	   	  <div class="popup popup--icon -error js_error-popup popup--visible">
          <div class="popup__background"></div>
          <div class="popup__content">
            <h3 class="popup__content__title">
              Error
              </h1>
              <p>Correo o Contraseña Incorrectos</p>
              <p>
                <a href="index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
              </p>
          </div>
        </div>
        <?php
    }
?>
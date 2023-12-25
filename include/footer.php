<?php
  $anio = date("Y");
  $especialidad = array("Filete de lomito", "Lomito con camarones","Camrones Au Gratin", "Langosta");
  $acerca = array("Cocineros", "Proveedores", "Sucursales", "Reservaciones");

?>
<footer class="pt-4 my-md-5 pt-md-5 border-top">

            <div class="row">
              <div class="col-12 col-md">
                <small>Plaza Futura, Calle el Mirador Colonia Escalón San Salvador San Salvador <br>

                  © 2017- <?php echo $anio ?>

                </small>
              </div>
              <div class="col-6 col-md">
                <h5>Caracteristicas</h5>
                <ul class="list-unstyled text-small">
                 <li><a class="text-muted" href="#">Gastronomia adecuada</a></li>
                  <li><a class="text-muted" href="#">Precios accesibles</a></li>
                  <li><a class="text-muted" href="#">Servicios deseados</a></li>
                  <li><a class="text-muted" href="#">Amplios horarios</a></li>
                  <li><a class="text-muted" href="#">Excelente ubicación</a></li>
                  <li><a class="text-muted" href="#">Zona Segura</a></li>
                </ul>
              </div>

              <div class="col-6 col-md">
                <h5>Especialidades</h5>
                <ul class="list-unstyled text-small">
                  <?php
                  foreach ($especialidad as $i => $value) {
                    echo '<li><a class="text-muted" href="#">'.$especialidad[$i].'</a></li>';
                  }
                    
                  ?>
                 
                </ul>
              </div>

              <div class="col-6 col-md">
                <h5>Acerca de</h5>
                <ul class="list-unstyled text-small">
                  <?php 
                  foreach ($acerca as $i => $value) {
                   echo '<li><a class="text-muted" href="#">'.$acerca[$i].'</a></li>';
                  }
                  ?>
                         
                </ul>
              </div>

            </div>
             
           </footer>
         </div>


      </div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
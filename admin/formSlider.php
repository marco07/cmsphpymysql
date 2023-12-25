<?php 
  include("include/headerAdmin.php");
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 contenido"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Formulario para agregar slider</h1>
           </div>

              <!-- Espacio para diseñar el formulario-->
      <form name="formNav" action="addSlider.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-th-list"></i>
            </div>
          </div>
             <input type="text" name="titulo" class="form-control" placeholder="agregar slider">
        </div>
        <hr>

          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-barcode"></i>
            </div>
          </div>
             <input type="text" name="descripcion" class="form-control" placeholder="Agregar descripcion">
        </div>
        <hr>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-plus-sign"></i>
            </div>
          </div>
           
            <input type="file" name="imagen" id="imagen" class="form-control">
        </div>
        <hr>


        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-link"></i>
            </div>
          </div>
             <input type="text" name="clase" class="form-control" placeholder="orden de slider">
        </div>
        <hr>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-link"></i>
            </div>
          </div>
             <input type="text" name="textoBoton" class="form-control" placeholder="Ingrese el texto del boton">
        </div>
        <hr>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-link"></i>
            </div>
          </div>
             <input type="text" name="url" class="form-control" placeholder="#">
        </div>
        <hr>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="glyphicon glyphicon-link"></i>
            </div>
          </div>
             <input type="text" name="activado" class="form-control" placeholder="Active">
        </div>
        <hr>

      

        <input type="submit" name="enviar" value="Agregar slider" class="btn btn-primary">

      </form>




    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>

</body>
</html>
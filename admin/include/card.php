<?php
  $user = "SELECT COUNT(*) total FROM usuario";
  $resultUsers = mysqli_query($conexion, $user);

  $platos = "SELECT COUNT(*) total FROM platos";
  $resultPlatos = mysqli_query($conexion, $platos);

  $sliders = "SELECT COUNT(*) total FROM slider";
  $resultSliders = mysqli_query($conexion, $sliders);

  $combos = "SELECT COUNT(*) total FROM combo";
  $resultCombos = mysqli_query($conexion, $combos);

?>
 <div class="row">

  <?php foreach ($resultUsers as $key => $users) { ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="info-box">
             <span class="info-box-icon bg-aqua"><span class="glyphicon glyphicon-user"></span></span></span>

             <div class="info-box-content">
               <span class="info-box-text">Usuario</span>
               <span class="info-box-number"><?php echo $users['total']?></span>
             </div>
           </div>
        </div>
      <?php } ?>


  <?php foreach ($resultPlatos as $key => $platos) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-red"><span class="glyphicon glyphicon-cutlery"></span></span>

           <div class="info-box-content">
              <span class="info-box-text">Platos</span>
              <span class="info-box-number"><?php echo $platos['total']?></span>
            </div>
          </div>
        </div>
 <?php } ?>



        <div class="clearfix visible-sm-block"></div>
 <?php foreach ($resultSliders as $key => $slider) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><span class="glyphicon glyphicon-menu-hamburger"></span></span>

            <div class="info-box-content">
              <span class="info-box-text">Slider</span>
              <span class="info-box-number"><?php echo $slider['total']?></span>
            </div>

          </div>

        </div>      
 <?php } ?>

 <?php foreach ($resultCombos as $key => $combo) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><span class="glyphicon glyphicon-tasks"></span></span>

            <div class="info-box-content">
              <span class="info-box-text">Combos</span>
              <span class="info-box-number"><?php echo $combo['total']?></span>
            </div>
          </div>
        </div>
      
      </div>

 <?php } ?>

 
       

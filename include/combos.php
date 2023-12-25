<?php
  $empresa="select * from empresa";
  $resultadoempresa=mysqli_query($cnn, $empresa);

  $combo = "select * from combo";
  $resultadocombo = mysqli_query($cnn, $combo);
?>
<div class="row featurette">
  <?php
    while($row4 = mysqli_fetch_array($resultadoempresa)){
           echo '<div class="col-md-7">';
             echo ' <h2 class="featurette-heading">'.$row4['titulo'].'</h2>';
             echo '<p class="lead">'.$row4['descripcion'].'</p>';
           echo ' </div>';
           echo ' <div class="col-md-5">';
             echo ' <img src="img/'.$row4['imagen'].'" style="width: 100%">';
           echo ' </div>';
         echo ' </div>';
    }
  ?>

         <hr class="featurette-divider">

         <div class="container">
           <div class="card-deck mb-3 text-center">

            <?php 

             while($row5 = mysqli_fetch_array($resultadocombo)){

             echo '<div class="card mb-4 shadow-sm">';
               echo '<div class="card-header" style="background: #777; color: #fff">';
                 echo '<h4 class="my-0 font-weight-normal">'.$row5['titulo'].'</h4>';
               echo '</div>';

               echo '<div class="card-body">';
                echo ' <h2 class="card-title pricing-card-title">$ '.$row5['precio'].'</h2>';
                echo ' <ul class="list-unstyled mt-3 mb-4">';
                  echo ' <li>'.$row5['descripcion'].'</li>';
                  echo '</ul>';
                echo ' <a href="'.$row5['url'].'" class="btn btn-lg btn-block btn-danger">Reserva ya</a>';
               echo '</div>';

               echo '</div>';
             }
          ?>

             
           </div>
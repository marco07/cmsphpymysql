  <?php
    $platos = "select * from platos";
    $resultadoPlatos = mysqli_query($cnn,$platos);
  ?>

  <div class="container contenido">
  <div class="row">
    <?php
    while($row3 = mysqli_fetch_array($resultadoPlatos)){
               echo'<div class="col-md-4">';
                  echo'<div class="card mb-4 shawdow-sm">';
                     echo'<img src="img/'.$row3["imagen"].'">';
                     echo'<div class="card-body">';
                        echo' <p class="card-text">';
                            echo $row3["detalle"];  
                         echo'</p>';
                         echo'<div class="d-flex justify-content-between align-items-center">';
                             echo'<div class="btn-group">';
                                   echo'<a href='.$row3["urlDetalle"].'><button class="btn btn-sm btn-outline-secondary" type="button">';
                                        echo' Detalles </a>';
                                   echo'</button>';
                                   echo'<a href='.$row3["urlReservar"].'><button class="btn btn-sm btn-outline-secondary" type="button">';
                                         echo'Reservar</a>';
                                   echo'</button>';
                             echo'</div>';
                             echo'<small class="text-muted">'.$row3["tiempoPreparacion"].' minutos</small>';  
                        echo' </div> '; 
                     echo'</div> ';  
                  echo'</div>';   
               echo'</div>';
               }
 ?>
 </div>
        
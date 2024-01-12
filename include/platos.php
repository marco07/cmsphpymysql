      <?php
        $plato="select * from platos";
        $resultplato = mysqli_query($cnn,$plato);
      ?>
        <div class="container contenido">
      <div class="row">
      	<!-- Platos del día-->

         <?php
              while($fila3 = mysqli_fetch_array($resultplato)){

                  echo '<div class="col-md-4">';
                    echo '<div class="card mb-4 shadow-sm">';
                      echo '<img src="img/'.$fila3["imagen"].'">';
                      echo '<div class="card-body">';
                        echo '<p class="card-text">'.$fila3["detalle"].'</p>';
                        echo '<div class="d-flex justify-content-between align-items-center">';
                          echo '<div class="btn-group">';
                           echo ' <a data-target="'.$fila3["urlDetalle"].$fila3['id'].'" class="btn btn-sm btn-outline-secondary" data-toggle="modal">Detalles</a>';
                            echo '<a href="'.$fila3["urlReservar"].'" class="btn btn-sm btn-outline-secondary">Reservar</a>';
                          echo '</div>';
                          echo '<small class="text-muted">'.$fila3["tiempoPreparacion"].' mins</small>';
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';
                  echo '</div>';

          ?>

          <!-- Modal -->
            <div class="modal fade" id="detalle<?php echo $fila3["id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      <?php echo $fila3['NombrePlato']; ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <img src="img/<?php echo $fila3['imagen'];?>" style="width: 100%;">
                      </div>
                       <div class="col-6">
                        <p>
                          <?php echo $fila3['detalle']; ?>
                        </p>
                        <p>
                          Tiempo de preparación: <?php echo $fila3['tiempoPreparacion']; ?> minutos
                        </p>
                  
                        <button type="button" class="btn btn-danger">
                            Precio $ <span class="badge badge-light"><?php echo $fila3['Precio']; ?></span>
                          </button>
                      </div>
                      
                      
                    </div>
                  </div>
    
                </div>
              </div>
            </div>

          <?php

                }
          ?>

    
      
  

      


      
    
        <!-- Platos del día-->

      </div>

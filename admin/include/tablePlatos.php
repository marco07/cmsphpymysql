 <?php
    $platosList = "SELECT * FROM platos";
    $resultPlatos= mysqli_query($conexion,$platosList);
 ?>

 <div class="table-responsive">
  <hr>
  <a href="formPlatos.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-add"></span> Agregar Plato</a>
  <br><br>
 <table class="table no-margin" style="background: white" id="tableData"> 
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Detalle</th>
                    <th>Enlace Detalle</th>
                    <th>Enlace Reserva</th>
                    <th>Preparación</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($resultPlatos as $key => $value) {
                  ?>
              
                      
                            <tr>
                              <td><?php echo $value['id']?></td>
                                 <td>

                                <img src="../img/<?php echo $value['imagen']?>" style="width: 200px;">
                                  
                              </td>
                              <td style="width:20%"><?php echo $value['detalle']?></td>
                           
                              <td><?php echo $value['urlDetalle']?></td>
                              <td><?php echo $value['urlReservar']?></td>
                              <td><?php echo $value['tiempoPreparacion']?></td>
                             <td>

                              <a href="editPlato.php?id=<?php echo $value['id']?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                            
                              <a href="delPlato.php?id=<?php echo $value['id']?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>                          
                            </tr>


                    <?php  } ?>
                     


                            </tbody>
                          </table>
                         
                        </div>
 <?php
    $comboList = "SELECT * FROM combo";
    $resultCombo= mysqli_query($conexion,$comboList);
 ?>

 <div class="table-responsive">
  <hr>
  <a href="formCombo.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-add"></span> Agregar Combo</a>
  <br><br>
 <table class="table no-margin" style="background: white"> 
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Url</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($resultCombo as $key => $value) {
                  ?>
              
                      
                            <tr>
                              <td><?php echo $value['id']?></td>
                              <td><?php echo $value['titulo']?></td>
                              <td>$ <?php echo $value['precio']?></td>
                              <td><?php echo $value['descripcion']?></td>
                              <td><?php echo $value['url']?></td>
                             <td>
                              <a href="editCombo.php?id=<?php echo $value['id']?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                            
                              <a href="delCombo.php?id=<?php echo $value['id']?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>                          
                            </tr>


                    <?php  } ?>
                     


                            </tbody>
                          </table>
                         
                        </div>
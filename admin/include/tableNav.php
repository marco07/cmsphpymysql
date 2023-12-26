 <?php
    $navList = "SELECT * FROM navegacion";
    $resultNav = mysqli_query($conexion,$navList);
 ?>

 <div class="table-responsive">
  <hr>
  <a href="formNav.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-add"></span> Agregar Navegacion</a>
  <br><br>
 <table class="table no-margin" style="background: white" id="tableData"> 
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Opcion</th>
                    <th>Url</th>
                    <th>Icono</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($resultNav as $key => $value) {
                  ?>
              
                      
                            <tr>
                              <td><?php echo $value['id']?></td>
                              <td><?php echo $value['opcion']?></td>
                              <td><?php echo $value['url']?></td>
                              <td><span class="<?php echo $value['icono']?>"></span> | <?php echo $value['icono']?></td>
                             <td>
                              <a href="editNav.php?id=<?php echo $value['id']?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                            
                              <a href="delNav.php?id=<?php echo $value['id']?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>                          
                            </tr>


                    <?php  } ?>
                     


                            </tbody>
                          </table>
                         
                        </div>
 <?php
    $userList = "SELECT * FROM usuario";
    $resultUsers = mysqli_query($conexion,$userList);
 ?>

 <div class="table-responsive">
  <hr>
  <a href="formUser.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-add"></span> Agregar Usuario</a>
  <br><br>
 <table class="table no-margin" style="background: white"> 
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($resultUsers as $key => $value) {
                  ?>
              
                      
                            <tr>
                              <td><?php echo $value['id']?></td>
                              <td><?php echo $value['username']?></td>
                              <td><?php echo $value['name']?></td>
                              <td><?php echo $value['email']?></td>
                             <td>
                              <a href="editUser.php?id=<?php echo $value['id']?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                            
                              <a href="delUser.php?id=<?php echo $value['id']?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>                          
                            </tr>


                    <?php  } ?>
                     


                            </tbody>
                          </table>
                         
                        </div>
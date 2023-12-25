 <?php
    $EmpresaList = "SELECT * FROM empresa";
    $resultEmpresa= mysqli_query($conexion,$EmpresaList);
 ?>

 <div class="table-responsive">
  <hr>
  <a href="formEmpresa.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-add"></span> Agregar Empresa</a>
  <br><br>
 <table class="table no-margin" style="background: white"> 
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($resultEmpresa as $key => $value) {
                  ?>
              
                      
                            <tr>
                              <td><?php echo $value['id']?></td>
                              <td><?php echo $value['titulo']?></td>
                              <td><?php echo $value['descripcion']?></td>
                              <td>
                                  <img src="../img/<?php echo $value['imagen']?>" style="width: 200px;">
                              </td>
                             <td>
                              <a href="editEmpresa.php?id=<?php echo $value['id']?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                            
                              <a href="delEmpresa.php?id=<?php echo $value['id']?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>                          
                            </tr>


                    <?php  } ?>
                     


                            </tbody>
                          </table>
                         
                        </div>
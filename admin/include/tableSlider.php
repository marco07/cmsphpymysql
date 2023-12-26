 <?php
    $sliderList = "SELECT * FROM slider";
    $resultSlider= mysqli_query($conexion,$sliderList);
 ?>

 <div class="table-responsive">
  <hr>
  <a href="formSlider.php" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-add"></span> Agregar Slider</a>
  <br><br>
 <table class="table no-margin" style="background: white" id="tableData"> 
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Orden</th>
                    <th>Texto Botón</th>
                    <th>Url</th>
                    <th>Activado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($resultSlider as $key => $value) {
                  ?>
              
                      
                            <tr>
                              <td><?php echo $value['id']?></td>
                              <td><?php echo $value['titulo']?></td>
                              <td style="width:20%"><?php echo $value['descripcion']?></td>
                              <td>

                                <img src="../img/<?php echo $value['imagen']?>" style="width: 200px;">
                                  
                              </td>
                              <td><?php echo $value['clase']?></td>
                              <td><?php echo $value['textoBoton']?></td>
                              <td><?php echo $value['url']?></td>
                              <td><?php echo $value['activado']?></td>
                             <td>
                              <a href="editSlider.php?id=<?php echo $value['id']?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                            
                              <a href="delSlider.php?id=<?php echo $value['id']?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>                          
                            </tr>


                    <?php  } ?>
                     


                            </tbody>
                          </table>
                         
                        </div>
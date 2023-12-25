<?php
      $slider = "select * from slider LIMIT 4";
      $resultadoslider = mysqli_query($cnn,$slider);
?>
      <div class="row">
		<div class="col-lg-12">
			<!-- Slider de imagenes -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            	<ol class="carousel-indicators">
            		<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            		<li class="" data-target="#myCarousel" data-slide-to="1"></li>
            		<li class="" data-target="#myCarousel" data-slide-to="2"></li>
            	</ol>
            	<div class="carousel-inner">
                  <?php
                     while($row2 = mysqli_fetch_array($resultadoslider)){
                  	 echo '<div class="carousel-item '.$row2["activado"].'">';
                  		echo '<img src="img/'.$row2["imagen"].'" class="'.$row2["clase"].'" alt="'.$row2["titulo"].'">';
                  		echo '<div class="container">';
                  			echo '<div class="carousel-caption">';
                  				echo '<h1>'.$row2["titulo"].'</h1>';
                  				echo '<p>'.$row2["descripcion"].'</p>';
                  				echo '<p><a href="#" class="btn btn-lg btn-danger" role="button">'.$row2["textoBoton"].'</a></p>';
                  			echo '</div>';
                  		echo '</div>';
                  	echo '</div>';
                  }

                  echo $row2;
                  ?>

            	

            	

            </div>

            <a href="#myCarousel" class="carousel-control-prev" rol="button" data-slide="prev">
            	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
            	<span class="sr-only">Previus</span>
            </a>

            <a href="#myCarousel" class="carousel-control-next" rol="button" data-slide="next">
            	<span class="carousel-control-next-icon" aria-hidden="true"></span>
            	<span class="sr-only">Next</span>
            </a>


            </div>

		</div>
	</div>
<?php 
  include("include/headerAdmin.php");
  if (!isset($_SESSION['username'])) {
    header('Location:index.php');
  }

?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 contenido">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Panel Administrativo</h1>
           </div>

       <?php 
		  include("include/card.php");
		?>

  
      <div class="row">
      	<div class="col col-md-12">
    <?php 
		  
    if (isset($_GET['menu'])) {
      // code...
   
      switch ($_GET['menu']) {
        case 1:
          include("include/tableUser.php");
          break;

        case 2:
          include("include/tableNav.php");
          break;

        case 3:
          include("include/tableCombo.php");
          break;

         case 4:
          include("include/tableSlider.php");
          break;

        case 5:
          include("include/tableEmpresa.php");
          break;
        
        default:
          echo 'No hay datos que mostrar';
          break;
      }

    }else{
      echo 'No hay datos que mostrar';
    }
		?>
      	</div>
      </div>
   

     
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
         
<link href="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.13.8/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.13.8/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
  var table = $('#tableData').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });//End of create main table

} );
</script>

</script>
</body>
</html>
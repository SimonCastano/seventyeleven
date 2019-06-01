<?php  session_start();
error_reporting(0);
if (empty($_SESSION['usuario'])) {
  header('location:Cpanel.php');
}

$salir=$_POST['btnsalir'];

if (isset($salir)) {
  session_destroy();
  header('location:Cpanel.php' );  
}

?>
<?php include('menu a.php'); ?>

<style type="text/css">
body{
  background-color: black;
}
</style>






<section class="contenido white">
  <h4>AGREGAR PRODUCTO</h4>
  <form method="post" action="producto.php" enctype="multipart/form-data">  

    <div class="row">
      <div class="input-field col s12 m6">
        <i class="material-icons prefix">content_paste</i>
        <input type="text" name="name" class="validate">
        <label for="icons-prefix">Nombre del producto</label>
      </div>

      <div class="input-field col s12 m6">
        <i class="material-icons prefix">link</i>
        <input id="" type="text" name="link" class="validate" >
        <label for="icons-prefix">Link de la pagina donde se puede encontrar el producto</label>
      </div>
    </div>
    <div class="row">
      <div class="file-field input-field col s12 m12">
        <div class="btn green">
          <span><i class="material-icons center">linked_camera</i></span>
          <input type="file" name="img" accept="image/*">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" >
        </div>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m12">
        <i class="material-icons prefix">content_paste</i>
        <input type="number" name="precios" class="validate" >
        <label for="icons-prefix">precio del producto</label>
      </div>
      </div
      >


      <center><button type="submit" name="btnactualizar" class="waves-effect waves-light btn  green"><i class="material-icons left">security</i>Actualizar</button>

      </section>



      <?php   
      include('config/conexion.php');
      error_reporting(0);
      $namimage=$_FILES['img']['name'];
      $tmpimage=$_FILES['img']['tmp_name'];
      $extimage=pathinfo($namimage);
      $url = "img/".$namimage;


      $nombre=$_POST ['name'];
      $can=$_POST['link'];
      $precio=$_POST['precios'];


      $Fecha = date('d-m-y');



      $guardar=$_POST['btnactualizar'];

      if (isset($guardar)) {
        if (is_uploaded_file($tmpimage)) {
          if (($extimage['extension'] =="png")||($extimage['extension']=="jpg")) {
            copy($tmpimage, $url);

            $sql="INSERT INTO productos VALUES('','$nombre','$can','$url',$precio)";







            if ($ejecutar = $conexion->query($sql)) {
              echo "<script>Materialize.toast(' PRODUCTO CORRECTAMENTE GUARDADO', 6000, 'rounded green accent-3')
              </script>";
            } else{
              echo "<script>Materialize.toast(' PRODUCTO NO SE A GUARDADO', 6000, 'rounded red accent-3')
              </script>";
            }

          }else{
            echo "<script>Materialize.toast(' error desconosido', 6000, 'rounded red accent-3')
            </script>";
          }
        }else{ 
          echo "<script>Materialize.toast(' Elija una imagen', 6000, 'rounded red accent-3')
          </script>";
        }

      }







      ?>
    </form>







    <form method="POST" action="producto.php"> 

      <center>  
        <section class="contenido z-depth-5 hoverable #9e9e9e white black-text " > 
          <h2>Consultar Productos  </h2>

          <div class="row">


            <div class="input-field col s8">
              <i class="material-icons prefix">local_grocery_store</i>
              <input id="icon_prefix" type="number" class="validate" name="code_v">
              <label for="icon_prefix">Codigo del producto</label>
            </div>
            <button name="btn_filtrar_v" class="tooltipped btn-floating btn-large waves-effect green waves-light #00838f cyan darken-3" data-tooltip="Buscar o filtrar por datos"  data-position="left" data-delay="50"><i class="material-icons white-text ">search</i></button>

          </div>
        </form>
        <form action="producto.php" method="GET">

          <?php   
          error_reporting();
          $buscador_v=$_POST['code_v'];
          $filtrador_v=$_POST['btn_filtrar_v'];
          if (isset($filtrador_v)) {



            echo"<table class'highlight bordered'>
            <tr>
            <th>Codigo</th>
            <th>Nombre</th>   
            <th> Link para la compra</th>   
            <th>Precio</th>  
            <th>Eliminar</th>                     
            </tr> <br>";
            $sql1="SELECT * FROM productos WHERE codigo=$buscador_v";
            $ejecutar=$conexion->query($sql1);
            while ($filas=$ejecutar->fetch_row()){
              echo "<tr> 
              <td>$filas[0]</td>
              <td>$filas[1]</td>   
              <td>$filas[2]</td>
              <td>$filas[3]</td>
              <td>
              <button name='btn_eliminar' class='tooltipped green btn-floating btn-large waves-effect waves-light #00838f cyan darken-3' data-tooltip='Eliminar producto'  value='$filas[0]' data-position='left' data-delay='50'><i class='material-icons white-text ''>remove_shopping_cart</i></button></td>
              </tr><br><br>" ;
            }


            echo "</table>";

          }
          $eliminar=$_GET['btn_eliminar'];
          $id=$_GET['deletes'];


          if (isset($_GET['btn_eliminar'])) {
            $delete="DELETE FROM productos WHERE codigo = '$eliminar'";
            echo"$delete";
            if ($ejecutar = $conexion->query($delete))
            {
              echo "<script>Materialize.toast(' PRODUCTO CORRECTAMENTE ELIMINADO', 6000, 'rounded green accent-3')
              </script>";
            }
            else
            {
              echo "<script>Materialize.toast('PRODUCTO NO SE A  ELIMINADO', 6000, 'rounded red accent-3')
              </script>";
            }
          }

          ?>
        </section>
      </form>
    </center>


    <br> <br> 

    <script> 
      $('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15, // Creates a dropdown of 15 years to control year,
today: 'Today',
clear: 'Clear',
close: 'Ok',
closeOnSelect: false // Close upon selecting a date,
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    var window_height = $(window).height();
    var page_height = $('#header').height() + $('#content').height();
    var footer_height = $('#footer').height();

    if (page_height < window_height) {
      margin_footer = window_height - page_height - footer_height - 40;
      $('#footer').css('margin-top', margin_footer);
    }
  });
</script>

<script type="text/javascript">
// Show sideNa
$('.button-collapse').sideNav('show');
// Hide sideNav
$('.button-collapse').sideNav('hide');
// Destroy sideNav
$('.button-collapse').sideNav('destroy');</script>

<script type="text/javascript">    $(".button-collapse").sideNav();
var elem = document.querySelector('.modal');
var instance = M.Modal.init(elem, options);

// Or with jQuery

$(document).ready(function(){
  $('.modal').modal();
});

</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>





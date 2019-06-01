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
<section class="form">
          
 <form class="col s12" action="administrar.php" method="post">
  

 <center><h2 class="white-text">AGREGAR UN NUEVO </h2> <H3 class="white-text">ADMINISTRADOR</H3></center>
 <div class="row">    
  <div class="row">
    <div class="input-field col s6">
      <input placeholder="NOMBRE DE USUARIO" id="first_name" type="text" name="nom" class="validate">
      <label for="first_name">NOMBRE</label>
    </div>
    <div class="input-field col s6">
      <input name="pass" id="password" type="password" class="validate">
      <label for="password">CONTRASEÑA</label>
    </div>
  </div>
  <div class="row">
  </div>
  <center><button type="submit" name="btnagregar" class="waves-effect waves-light btn  green"><i class="material-icons left">security</i>Agregar</button><br>  <br>  <br>  <br>  <br>  <br>  
  </center>
  <style type="text/css">
    body{
      background-color: black
    }

  </style>
  <article class="contenido center">  <center><strong>  <h2 class="white-text">Buscar o filtrar  </h2>  <H3 class="white-text">ADMINISTRADORES</H3></strong></center>
  <div class="row">    
    <div class="row">
      <div class="input-field col s6">
        <input placeholder="NOMBRE DE ADMINISTRADORES" id="first_name" type="text" name="txtfil" class="validate white-text">
        <label for="first_name" class="white-text">NOMBRE DEL AMINISTRADOR</label>
      </div>
      <center><button type="submit" name="btnfiltro" class="waves-effect waves-light btn  green"><i class="material-icons left">find_in_page</i>Filtrar</button>
      </center>
    </div>
  </form>

  <?php  
  include('config/conexion.php');
  $fil=$_POST ['txtfil'];
  $Buscar=$_POST['btnfiltro'];
  $sql="SELECT * from admin WHERE user='$fil'";
  $ejecutar=$conexion->query($sql);
  echo "<table class='bordered white-text'>
  <tr><th>NOMBRE</th><th>contrasaeña</th></th>";
  while ($filas=$ejecutar->fetch_row()) {
   echo "<tr><td>$filas[0]</td><td>$filas[1]</td>";    
 }
 echo "</table>";
 ?></article>
</section>
</ul>
</div>
</nav>
<body>
<?php  
$delete=$_POST¨['delete'];
if (isset($delete)) {
 
 
}else{
  echo "<script>Materialize.toast('Bienvenido - <h6>$_SESSION[usuario]</h6>  - espero que estes bien', 6000, 'rounded green accent-3')
     </script>";

}





?>



	

</body>


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

<?php include('pie A.php') ?>




  
  <?php   
  include('config/conexion.php');
  $name=$_POST['nom'];
  $passw=$_POST['pass'];
  $Agregar=$_POST['btnagregar'];

  if(isset($Agregar)){
    $sql="INSERT INTO admin VALUES ('$name','$passw')"; 
    if ($ejecutar=$conexion->query ($sql)){
     echo "<script>Materialize.toast('Guardado correcto ', 4000,'green')</script>";
   } else{
    echo "<script>Materialize.toast('Error de guardado', 4000,'red')</script>";
  }
}
?> 


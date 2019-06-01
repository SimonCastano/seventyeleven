  <?php
ob_start();
include('menu u.php')
?>
 <!DOCTYPE html>
  <html>
  <meta charset="utf-8">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript">$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
        
</script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


 







    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

        
        <script type="text/javascript"> $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>
 <section class="contenido">
      <SECTION class="header">
      <center><h2>Cpanel</h2></center>
      <center><p>INICIA SECION  <br> esta zona es solo para administradores </p></center>
      <form class="col s12" action="Cpanel.php" method="post"><br><br><br><br><br>

      <div class="row">
    
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="name" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">User Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">fingerprint</i>
          <input name="pass" id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Contraseña</label>
        </div>
      </div>
    
  </div><br><br>


  <center> <button  class="btn waves-effect waves-light  black green-text" type="submit" name="action">enviar
    <i class="material-icons right">send</i>
 </button> </center> </form>


</section>
    <?php
  include('config/conexion.php');
  error_reporting(0);
  session_start();
   $nom=$_POST['name'];
   $contra=$_POST['pass'];
   $guardar=$_POST['action'];
   
   
   if(isset($guardar)){
        $sql="SELECT * FROM admin  WHERE user='$nom' and pass='$contra'";         
          $ejecutar=$conexion->query($sql);
          $filas=$ejecutar-> fetch_row();
          if(empty($nom)|| empty($contra)){
        echo "<script>Materialize.toast('CAMPOS VACIOS', 6000, 'rounded red accent-3')
     </script>";
      }
      else{
       if ($filas[0]==$nom and  $filas[1]==$contra){
        $_SESSION ['usuario']=$nom;
        header('location:administrar.php');
      }else{
         echo "<script>Materialize.toast('Usuario o contraseña Incorrectos', 6000, 'rounded red accent-3')
     </script>";

      }

       }



      }
   
?>

        
  <br><br>      
        
</SECTION><
   
        <?php include('footer u.php ') ?>
 <?php  ob_end_flush();  ?>
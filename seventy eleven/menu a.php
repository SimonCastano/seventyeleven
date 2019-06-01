<!DOCTYPE html>
<html lang="es">
<head>
	<title>Seventy Eleven</title>
   <link rel="shortcut icon" type="image/x-icon" href="img/logotipo.png" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
     <link rel="stylesheet" type="text/css" href="fonts/style.css">
     <link rel="stylesheet" type="text/css" href="css/materialize.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/materialze.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

  <div class="navbar-fixed hide-on-small-only black">
    <nav>
      <div class="nav-wrapper  #424242 grey darken-3 ">
        <a href="#!" class="brand-logo black-text"><img src="img/logotipo.png" width="150" height="100"></a>
        <ul class="right hide-on-med-and-down">
          <li class="green"> <?php session_start();
            echo " Hola   $_SESSION[usuario]";
          ?></li> 
       <li><a href="administrar.php">Administrador</a></li>
        <li><a href="mensajes.php">Mensajes</a></li>
        <li><a  href="producto.php">Productos</a></li>
       <li> <form method="post" action="administrar.php">   <BUTTON name="btnsalir" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">power_settings_new</i></BUTTON></form></li>
        </ul>
      </div>
    </nav>
  </div>
        <nav class="hide-on-large-only #424242 black darken-3">
           <ul id="slide-out" class="side-nav ">
      <li><a href="">Administrador</a></li>
        <li><a href="">Mensajes</a></li>
        <li><a  href="producto.php">Productos</a></li>
       <li> <form method="post" action="administrar.php">   <BUTTON name="btnsalir" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">power_settings_new</i></BUTTON></form></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large center"><i class="material-icons  hide-on-large-only center">sort</i></a>
        </nav>
   
         
<script type="text/javascript">
  // Initialize collapse button
  
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
</script>
<?php include('menu u.php'); ?>
<br><br><br><br>
<style type="text/css">
  body{
   background:url(img/back.jpg);
  }
</style>
<body>
  <section class="contenido white" >
    <h2 style="font-family: robot ;">Ponte en contacto con nosotros</h2>
  </section>

  <section class="contenido hoverable z-depth-5"> 
 <form class="col s12 contenido white" action="contacto.php" method="post" >

       <div class="row">
    
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="name" id="icon_prefix" type="text" class="validate">
          <label  for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="tel" id="icon_telephone" type="number" class="validate">
          <label for="icon_telephone" data-error="Error esto no es un numero">Telefono</label>
        </div>
      </div>
    
  </div>
         <div class="row">
    
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate">
          <label for="email" data-error="Error esta no es una direccion valida" data-success="right">Email</label>
        </div>
      </div>
    
  </div>

         <center><div class="row">
    
      <div class="row">
        <div class="input-field col s6 m12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="msm" id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Mensaje o Comentario</label>
        </div>
      </div>
    
  </div>
        </center>
        <center> <button  class="btn waves-effect waves-light  black " type="submit" name="action">enviar
    <i class="material-icons right">send</i>
 </button> </center> <br><br></form>

</body>


 <?php
  include('config/conexion.php');
  error_reporting(0);
   $nom=$_POST['name'];
   $Telefono=$_POST['tel'];
   $email=$_POST['email'];
   $mensag=$_POST['msm'];
   $Fecha = date('D-m-y h:i:s');
 
   $guardar=$_POST['action'];
   
   if(isset($guardar)){


   $sql="INSERT INTO contacto VALUES ('','$nom',$Telefono,'$email','$mensag','$Fecha')";         
      if ($ejecutar=$conexion->query ($sql)){
        echo "<script>Materialize.toast(' GUARDADO CORRECTAMENTE', 3000, 'rounded green accent-3')
     </script>";
      }
      else{
       echo "<script>Materialize.toast('Error de guardado', 3000, 'rounded red accent-3')
     </script>";

      }
   } 
?>





<br><br><br><br><br>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider();
    });
        </script>
</body>
<script type="text/javascript">

     $(document).ready(function(){
      $('.slider').slider();
    });
        
$('.slider').slider('start');
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();


        $(document).ready(function(){
      $('.parallax').parallax();
    });
        
  });

    $('.button-collapse').sideNav({
      menuWidth: 100, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is closed
    }
  );

  $('.carousel.carousel-slider').carousel({fullWidth: true});
  
</script>
 </section>
</body>
 <?php include ('footer u.php'); ?>
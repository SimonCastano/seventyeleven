
<?php include('menu a.php'); 
error_reporting(0);

?>
<section class="contenido">

  <center><h3>Esta respuesta se enviara <br>al correo del destinatario</h3></center>
<form class="col s12" action="responder.php" method="post">



             <div class="row">
   
       <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input placeholder="introduce aqui tu nombre" id="icon_prefix" type="text" name="nombre" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">attach_file</i>
          <input placeholder="Aqui va el asunto del email" name="txtasunto" id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Asunto </label>
        </div>
      </div>
    </form>
  </div>
             <div class="row">
   
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="¿A quin va dirigido?" value=""     name="txtdestino" id="email" type="email" class="validate">
          <label for="email" data-error="Error" data-success="right">Email</label>
        </div>
      </div>
    
  </div>

  <div class="row">
   
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="com" id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Mensaje </label>
        </div>
      </div>
   
  </div>
        
</center>
        <center> <button  class="btn waves-effect waves-light  black green-text" type="submit" name="enviar">enviar
    <i class="material-icons right">send</i>
 </button> </center>
 <ul id='dropdown1' class='dropdown-content listad'>
  <li><a href="">DEsde <?php echo "$_SESSION[email]"; ?></a></li>
    <li><a href="">FEcha<?php echo "$_SESSION[fecha]"; ?></a></li>
      <li><a href="divider"></a></li>
        <li><a href="">DEsde <?php echo "$_SESSION[telefono]"; ?></a></li>

</ul>
<p> 
  <div class="row">
    <div class="card black ">
      <div class="card-content white-text" >
        <span class="card-title green-text">Mensaje</span>
        <p>Mensaje : <?php  echo "$_SESSION[mensaje]"; ?> </p>
      </div>
     </div>
     
</p>
   </div>
</form>






    



           </section>



 <?php 
  include('config/conexion.php');

    $sql="SELECT * FROM form ORDER BY codigo desc";
    $ejecutar=$conexion->query($sql);


$Nombre=$_POST['nombre'];
$Correo=$_POST['txtdestino'];
$asunto=$_POST['txtasunto'];
$desde=".com";
$Mensaje=$_POST['com'];
$BTNenviar=$_POST['enviar'];
$contenido="NOMBRE:" . $Nombre . " \n correo:" . $Correo .  " \n desde:" .$desde . "\nmensaje:"  . $Mensaje ;   




if (isset($BTNenviar)) {
   
 mail($Correo,$asunto,$contenido,$desde);
    
 echo "<script>Materialize.toast(' ENVIADO CORRECTAMENTE', 3000, 'rounded green accent-3')
     </script>";
    

}else{

  echo "<script>Materialize.toast('Error de ENVIADO', 3000, 'rounded red accent-3')
     </script>";
}
     

  
 ?>
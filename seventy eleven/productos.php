<?php include('menu u.php'); ?>
<br><br><br><br>
<body>
  <div class="hero ">

  <section class="contenido">
    <h1 contenteditable class="black-text bb">Seventy Eleven</h1>
  
<h3 contenteditable  class="black-text">nuestros productos son los de mejor calidad</h3>
<br><br>

<h1><i class="large  material-icons black-text">arrow_drop_down</i></h1>
  </div>
<style type="text/css">
                                                      body {
                                                      background-color:white; 
                                                      
                                                      
                                                    }
                                                    #info {
                                                      width: 400px;
                                                      text-align: center; background: #fff;
                                                      margin: 150px auto 0 auto;
                                                      padding: 30px;
                                                      border-radius: 5px;
                                                    }
                                                    </style>
                                                    <script type="text/javascript">
                                                      window.onload = function() {
                                                      document.onmousemove = function(e) {
                                                        var x = -(e.clientX/10);  
                                                        var y = -(e.clientY/10);
                                                        this.body.style.backgroundPosition = x + 'px ' + y + 'px';
                                                      };
                                                    };
                                                    </script>
  <style>

 
  .hero {
    min-height: 100vh;
    display:flex;
    justify-content: center;
    align-items: center;
    color:black;
  }
  .bb {
    text-shadow: 10px 10px 0 rgba(1,1,1,1);
    font-size: 100px;
  }
  </style>

<script>
  const hero = document.querySelector('.hero');
  const text = hero.querySelector('h1');
  const walk = 30; // 100px
  function shadow(e) {
    const { offsetWidth: width, offsetHeight: height } = hero;
    let { offsetX: x, offsetY: y } = e;
    if (this !== e.target) {
      x = x + e.target.offsetLeft;
      y = y + e.target.offsetTop;
    }
    const xWalk = Math.round((x / width * walk) - (walk / 2));
    const yWalk = Math.round((y / height * walk) - (walk / 2));
    text.style.textShadow = `
      ${xWalk}px ${yWalk}px 0 rgba(255,0,255,0.9),
      ${xWalk * -2}px ${yWalk}px 0 rgba(0,255,255,0.7),
      ${yWalk}px ${xWalk * -2}px 0 rgba(0,258,0,4.9),
      ${yWalk * -2}px ${xWalk}px 0 rgba(0,0,255,0.7)
    `;
  }
  hero.addEventListener('mousemove', shadow );
</script>
</section>


<br><br><br><br><br>
<center><article class="index"> <h2 class="black-text ">Productos</h2><h4 class=" black-text"> y servicios</h4></article></center>

<br><br><br><br>
<SECTION style ="font-family: cursive;" class="contenido">
  <?php 
        include('config/conexion.php');
        $sql="SELECT * FROM productos";
        $ejecutar=$conexion->query($sql);
        echo "<div class='row'>";
        while ($filas=$ejecutar->fetch_row()) {
       echo
        "<div class='col s12 m4'>
        <div class='card'>
        <div class='card-image'>
          <img src='$filas[3]' height='350' width='500' $filas[0]  >
          </div>
          <div  class='card-content'>
          <h6>$filas[1] </h6><br><p>codigo: $filas[0] </p>
          </div>
          <div class='card-action'>
          <a  href='$filas[2]' target='_blank'>$".number_format($filas[4])."</a>
          </div>
          </div>
          </div>";

        }
        echo '</div';
         ?>



    

<a href="" target="_blank"></a>
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
<script type="text/javascript"> var elem = document.querySelector('.parallax');
  var instance = M.Parallax.init(elem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.parallax').parallax();
  });</script>

</SECTION>
 <?php include ('footer u.php'); ?>
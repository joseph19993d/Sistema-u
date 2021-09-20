
<?php
session_start();
if ( 
	isset($_SESSION['CORREO'])== true && empty($_SESSION['CORREO']) == false )
{
 

 if ($_SESSION['ROL']= 'administrador') {
   # code...
   header('location:vistas/sesion/bienvenida.php ');

 }
 

}


/* 
$nombre="BIENVENIDO";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php  include 'mejoras/mobil.php';  ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nombre ?></title>
    
</head>
<body>
<div data-role="header" style="background:black">
         <h1 style="color:white" style="text-align:center;" ><?=$nombre ?> </h1>
		 <?php  include 'vistas/mejoras/navegador.php'; //incluimos la cabezera pre creada  ?> 
</div>  
<!-- AQUI VA EL CUERPO DE LA APP -->
   <!-- Navegador 2 -->
    <div  style="color:white" >
    <div data-role="collapsible"> 
                  <h1 class= "ui-btn" style="background-color:black">nevagar</h1>
              <a href= "vistas/Administrador/index.php" style="background:black" class= "ui-btn" > <di  style="color:white;">Administrador </di> 
              </a>
              <a href= "#p3" style="background:black" class= "ui-btn" style="color:white;" >  <di  style="color:white;">Otra opcr </di>
              </a>
            </div>
    </div>
<div>
<h1 style="color:black"  align="center" > </h1>
<img  src="https://img.huffingtonpost.com/asset/5c8b6b3b2400006d054d6e12.jpeg?ops=1200_630" width="100%" />

<!-- FIN DE EL CUERPO DE LA APP -->
</div>
<?php
 include 'mejoras/piesera.php'; //incluimos el pie de pagina
?>	
    
</body>
</html>
<? */ ?>

?>
<!DOCTYPE html>
<html>

<head>
<title> Logeo </title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- INICIO Estilos necesarios (que se vea bonito :v ) -->

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">

<link rel="stylesheet" href="jquery-mobile.css">
<script src="jquery-mobile.js"></script>

<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

<!-- FIN Estilos necesarios (que se vea bonito :v ) -->

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- scrip para css ???
<script src="https://code.jquery.com/jquery-3.1.0.min.js > </script">
-->
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>

<!-- archivos necesarios para la validacion  -->
<link rel="stylesheet" href="css/screen.css" /> 
<script src="http://code.jquery.com/jquery-2.0.3.js"></script>
<script src="jquery.validate.js"></script>
<!-- pagina para entender la validacion:
http://jquery-manual.blogspot.com/2014/05/validar-formularios-con-jquery-validate.html
 -->
<!-- fin de archivos necesarios para validacion -->
<!-- 
ESTILOS
-->
<style>
  .clase-miku{

  }
  .clase-hatsume{

  }
  .clase-sonico {
    background-image: url('https://lh3.googleusercontent.com/proxy/i5eR0iuNHkjxjykvLUXCjjNQFoH0oi2mJJhUQ1r_-uCMak1_YDaGqpsFfKo7f8H2TBqvggGJIpRkIH8WcCLtwUC_vGSIr7K3SVUynDWiSnUhU8nB9Ib5qZzJoltwng');
  }

</style>
<!--
  FIN DE ESTILOS
-->  


</head>
<body >

<!-------------- inicio de pagina "page" ----------->

<div data-role="page" >
<!-------------- Pagina header ----------->

<div data-role="header">
<h1> Home </h1>
<h1> . </h1>

</div>

<!--------------  Pagina main content ----------->

<div data-role="main" class="ui-content" class="clse-sonico" >

<div> <h2 >Iniciar sesion como:  </h2> </div>


<!-- OPCIONES horizontales || vertical -->
<!-- Estilos de botones || iconos :
http://www.w3bai.com/es/jquerymobile/jquerymobile_buttons.html
-->
<h3></h3>

      <p> </p>
      <a href="sesion/iniciar.php" class="ui-btn ui-icon-arraw-r ui-btn-icon-top ">Administrador</a>
      <a href="sesion/iniciar2.php" class="ui-btn ui-icon-arraw-r ui-btn-icon-top">Usuario</a>

    <div> <h2 > Crear nuevo:  </h2> </div>

      <p> </p>
      <a href="../vistas/sala/crear.php" class="ui-btn ui-icon-arraw-r ui-btn-icon-top">Crear</a>

    
<!--FIN OPCIONES verticales -->



</form>
</div>


</body>
</html>

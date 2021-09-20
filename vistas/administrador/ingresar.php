<?php 

$nombre= $_GET['nombre'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php  include '../mejoras/mobil.php';  ?>
	
	<title><?= $nombre; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- INICIO Estilos necesarios (que se vea bonito :v ) -->

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">

<link rel="stylesheet" href="jquery-mobile.css">
<script src="jquery-mobile.js"></script>

<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

<!-- FIN Estilos necesarios (que se vea bonito :v ) -->

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
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

</head>
<body>
	<header>
		<div>
		<h2 aling="center">INGRESAR  <?= $nombre; ?> </h2>
		</div>
	</header>
    
	<form action="../../controladores/Administradores.php" method="post">
        <!-- INICIO  DE CAMPOS label & input   -->
<?php 
        /* DATOS:
		$this->nombre = '';
        $this->correo ="";
        $this->contraseña="";
        $this->numero_celular="";
        $this->sala="";
        */  
        ?>
<label for="Nombre">Nombre : <span>*</span></label>
<input type="text" name="nombre" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"    class="required" >

<label for="celular">celular: <span>*</span></label>
<input type="number" id="celular" name="celular"  maxlength="25" placeholder="rode@gmail.com"  class="required" />

<label for="correo">correo: <span>*</span></label>
<input type="Email" id="correo" name="correo"  maxlength="25" placeholder="rode@gmail.com"  class="required" />


<label for="contraseña" > Contraseña: <span>*</span> </label>
<input type="password" id="d" name="contraseña"   placeholder="*******" minlength="7" maxlength="25" required/>

<!-- FIN  DE CAMPOS label & input   -->
		
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
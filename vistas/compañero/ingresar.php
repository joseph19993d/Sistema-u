<?php 

$nombre= $_GET['nombre'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php  include '../mejoras/mobil.php';  ?>
	
	<title><?= $nombre; ?></title>

</head>
<body>
	<header>
	
		<div>
		<h2 aling="center">INGRESAR  <?= $nombre; ?> </h2>
		</div>
	
	</header>

	<form action="../../controladores/compañeros.php" method="post">

		<//input name="nombre" placeholder="Nombre" required autofocus />

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
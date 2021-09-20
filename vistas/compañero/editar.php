<?php
	require_once '../../modelos/compañero.php';
	$c = compañero::obtenerPorId(base64_decode($_GET['id']));
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
		
		<h1>EDITAR <?= $nombre; ?> </h1>
		
		
	</header>
	
	<form action="../../controladores/compañeros.php" method="post">

<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />


        
<label for="Nombre">Nombre : <span>*</span></label>
<input type="text" name="nombre" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"  value="<?=$c[1]?>"  class="required" />

<label for="celular">Celular: <span>*</span></label>
<input type="number" id="celular" name="celular"  maxlength="25" placeholder="307112564"  value="<?=$c[2]?>" class="required" />

<label for="contraseña" > Contraseña: <span>*</span> </label>
<input type="password" id="contraseña" name="contraseña"   placeholder="*******" minlength="7" maxlength="25" required/>

		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>
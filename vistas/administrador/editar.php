<?php
	require_once '../../modelos/Administrador.php';
	$A = Administrador::obtenerPorId(base64_decode($_GET['id']));
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
	
	<form action="../../controladores/Administradores.php" method="post">

		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />



        
<label for="Nombre">Nombre : <span>*</span></label>
<input type="text" name="nombre" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"  value="<?=$A[1]?>"  class="required" />

<label for="celular">celular: <span>*</span></label>
<input type="number" id="celular" name="celular"  maxlength="25" placeholder="307112564"  value="<?=$A[2]?>" class="required" />

<label for="contraseña" > Contraseña: <span>*</span> </label>
<input type="password" id="d" name="contraseña"   placeholder="*******" minlength="7" maxlength="25" required/>


		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>
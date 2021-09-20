<?php 

$nombre= $_GET['nombre'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php  include '../mejoras/mobil.php';  ?>
	<meta charset="UTF-8" />
	<title>titulo</title>
</head>
<body>
	<header>
	
		<div>
		<h2 aling="center">INGRESAR  <?= $nombre; ?> </h2>
		</div>
	
	</header>

	<form action="../../controladores/Salas.php" method="post">
		<input type="Email" name="correo" placeholder="correo"  minlength="5" maxlength="30" autofocus required />
		
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
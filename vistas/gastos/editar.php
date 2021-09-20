<?php
	require_once '../../modelos/gasto.php';
   
	$g = Gasto::obtenerPorId(base64_decode($_GET['id']));
    // id debe ser el dato de id veniente de el <a href></>
	$nombre= $_GET['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php  include '../mejoras/mobil.php';  ?>
	<title>Roles</title>
</head>
<body>
	<div data-role="header">
		<h1>EDITAR <?= $nombre; ?> </h1>
	</div>
	<form action="../../controladores/Gastos.php" method="post">
	
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>"  />
		<input type="text" name="nombre" placeholder="Descripcion" value="<?= $g[8] ?>" required autofocus />
         <!--// value debe se iguala  la posicion de el dato en la base de datos -->

		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>
<?php 

$nombre= $_GET['nombre'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php  include '../mejoras/mobil.php';  ?>
	<title>Roles</title>
</head>
<body>
	<header>
	
		<div>
		<h2 aling="center">INGRESAR  <?= $nombre; ?> </h2>
		</div>
	
	</header>

	<form action="../../controladores/Invitados.php" method="post">

        <!-- INICIO  DE CAMPOS label & input   -->
<?php /* ingresar
		    // $invitado->setsala($_POST['sala']); 


            $invitado->setcorreo_creador($_POST['correo']);
            $invitado->setcorreo_responsable($_POST['correor']);
            $invitado->setnombre($_POST['nombre']);
            $invitado->setnombre_creador($_POST['nombrec']);
			$invitado->setnumero_celular($_POST['numero']);
            $invitado->setrol('invitado');
 */?>
<label for="correo">Correo de creador: <span>*</span></label>
<input type="Email" id="correo" name="correo"  maxlength="35" placeholder="a@dadasd.com"  class="required" />

<label for="fecha">Correo Responsable: <span>*</span></label>
<input type="Email" id="correo" name="correor"  maxlength="35" placeholder="persona@sadasd.com"  class="required" />

<label for="Nombre">Nombre de responsable : <span>*</span></label>
<input type="text" name="nombre" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"    class="required" >

<label for="Nombre">Nombre de creador : <span>*</span></label>
<input type="text" name="nombrec" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"    class="required" >

<label for="Nombre">Numero celular : <span>*</span></label>
<input type="number" name="numero" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"    class="required" >

<!-- FIN  DE CAMPOS label & input   -->
		
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
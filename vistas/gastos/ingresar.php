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

	<form action="../../controladores/Gastos.php" method="post">

        <!-- INICIO  DE CAMPOS label & input   -->
<?php /*
		case 'Ingresar':
			$gasto->setcorreo_creador($_POST['correo']); string 
			$gasto->setfecha_creacion($_POST['fecha']);  fecha
			$gasto->setnombre_responsable($_POST['nombre_responsable']);  string
----->>>>	//$gasto->setsala($_POST['correo_creador']); // $sala->setIdSala($_POST['sala']); //sala se setea por sesion  Int
            $gasto->settotal($_POST['total']); Int
			$gasto->setnombre_gasto( $_POST['nombre']) ; string
			$gasto->settipo_gasto( $_POST['tipo']) ; Int
            $gasto->setdescripcion($_POST['descripcion']);
			break;
            /* DATOS:
	private $id;
    private $correo_creador;
    private $fecha_creacion;
	private $nombre_responsable;
    private $sala;
    private $total;
    private $nombre_gasto;
    private $tipo_gasto;
    private $conexion;
	private $descripcion;


		case 'Ingresar':
			$gasto->setcorreo_creador($_POST['correo']);
			$gasto->setfecha_creacion($_POST['fecha']);
			$gasto->setnombre_responsable($_POST['nombre_responsable']);
			//$gasto->setsala($_POST['correo_creador']); // $sala->setIdSala($_POST['sala']); //sala se setea por sesion 
            $gasto->settotal($_POST['total']);
			$gasto->setnombre_gasto( $_POST['nombre']) ;
			$gasto->settipo_gasto( $_POST['tipo']) ;
			$gasto->setdescripcion($_POST['descripcion']);
			$gasto->ingresar();
			break;



			INSERT INTO `gasto` 
			(`id`, `sala`, `correo_creador`, `fecha_creacion`, `nombre_responsable`, `total`, `nombre_gasto`, `tipo_gasto`, `decripcion`) 
			VALUES ('1', '23', 'dasd', '2021-05-05', 'asdasd', '3234', 'sadasd', '23asdasd', '');
			`correo_creador`, `fecha_creacion`, `nombre_responsable`, `total`, `nombre_gasto`, `tipo_gasto`, `decripcion`"


 */?>
<label for="correo">correo de creador: <span>*</span></label>
<input type="Email" id="correo" name="correo"  maxlength="35" placeholder="a@dadasd.com"  class="required" />

<label for="fecha">fecha: <span>*</span></label>
<input type="date" id="fecha" name="fecha"  maxlength="25" placeholder="12/7/2021"  class="required" date/>

<label for="Nombre">Nombre de responsable : <span>*</span></label>
<input type="text" name="nombre_responsable" id="Nombre" placeholder="persona" minlength="4"  maxlength="25"    class="required" >

<label for="Total">Valor: <span>*</span></label>
<input type="number" id="total" name="total"   maxlength="1" maxlength="25" placeholder="4848748"  class="required" />

<label for="Nombre">Nombre de gasto : <span>*</span></label>
<input type="text" name="nombre" id="Nombre" placeholder="gasto por comida" minlength="4"  maxlength="15"    class="required" >

<label for="tipo de gasto">tipo de gasto: <span>*</span></label>
<input type="text" id="tipo de gasto" name="tipo"  maxlength="25" placeholder="positivo"  minlength="6" class="required" />

<label for="tipo de gasto">Descripcion: <span>*</span></label>
<input type="text" id="tipo de gasto" name="descripcion"  maxlength="245" placeholder="positivo"  minlength="6" class="required" />




<!-- FIN  DE CAMPOS label & input   -->
		
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
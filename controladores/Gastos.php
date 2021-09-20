<?php require_once '../modelos/gasto.php';
// segun "a" sea una opcion, se ejecutara lo correspondiente pasandole los datos desde aqui a el modelo roles
/* 
*/
$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$A = new  Gasto();  // A es Gasto 
    $sala = new Sala(); 
    //$A es Gasto
	switch ($accion) {
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
		case 'Editar':
			$gasto->setId(base64_decode($_POST['id']));
			$gasto->setdescripcion($_POST['descripcion']);
           // $sala->setcorreo_creador($_POST['correo_creador']); //por sesion
			$gasto->editar();
			break;
		case 'eliminar':
			$gasto->setId($_GET['id']);
            // $sala->setIdSala(base64_decode($_GET['IdSala'])); //por sesion
			$gasto->eliminar();
			break;
	}
}

header('location: ../vistas/gastos/index.php');


?>
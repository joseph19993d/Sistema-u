<?php require_once '../modelos/invitado.php';
// segun "a" sea una opcion, se ejecutara lo correspondiente pasandole los datos desde aqui a el modelo roles
/*

*/
$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$invitado = new  invitado();  // A es invitado 
    $sala = new Sala(); 
    //$A es invitado
	switch ($accion) {
		case 'Ingresar':
           // $invitado->setsala($_POST['sala']);
            $invitado->setcorreo_creador($_POST['correoc']); //por sesion 
            $invitado->setcorreo_responsable($_POST['correor']);
            $invitado->setnombre($_POST['nombre']);
            $invitado->setnombre_creador($_POST['nombrec']); // por sesion
            $invitado->setnumero_celular($_POST['numero']);
            $invitado->setrol('invitado');

			$invitado->ingresar();
			break;
		case 'Editar':
			$invitado->setId(base64_decode($_POST['id']));
			//$invitado->setdescripcion($_POST['descripcion']); nooooooooo
            $invitado->setnumero_celular($_POST['numeroc']); //por sesion
            $invitado->setnombre($_POST['nombre']);
			$invitado->editar();
			break;
		case 'eliminar':
			$invitado->setId($_GET['id']);
            // $sala->setIdSala(base64_decode($_GET['IdSala'])); //por sesion
			$invitado->eliminar();
			break;
	}
}

header('location: ../vistas/invitados/index.php');


?>
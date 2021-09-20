<?php
echo "estoy aqui";
require_once '../modelos/Sala.php';
// segun "a" sea una opcion, se ejecutara lo correspondiente pasandole los datos desde aqui a el modelo roles

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$sala = new Sala();

	switch ($accion) {
		case 'Ingresar':
			$sala->setCorreo( $_POST['correo']) ;
			$sala->ingresar();
			break;
            
		case 'Editar':
			$sala->setIdSala(base64_decode($_POST['id']));
			$sala->setCorreo( $_POST['correo']);
			$sala->editar();
			break;
		case 'eliminar':
			$sala->setIdSala(base64_decode($_GET['id']));
			$sala->eliminar();
			break;
            
	}
}

header('location: ../vistas/sala/index.php');
?>
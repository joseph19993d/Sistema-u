<?php require_once '../modelos/compañero.php';
      


$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$compañero = new  Compañero();  // compañero 
    $sala = new Sala(); 
    //$compañero es compañero

	switch ($accion) {
		case 'Ingresar':
			//nombre, numero_celular,	correo,	contraseña, rol 
			$compañero->setNombre( $_POST['nombre']) ;
            $compañero->setNumero_celular($_POST['celular']);
			$compañero->setCorreo($_POST['correo']);
			$compañero->setContraseña($_POST['contraseña']);
           // $sala->setIdSala($_POST['sala']); //sala se setea por sesion
		    $compañero->setRol('compañero'); 
			$compañero->ingresar();

			break;
		case 'Editar':
		
			$compañero->setId(base64_decode($_POST['id']));
			$compañero->setNombre( $_POST['nombre']) ;
            $compañero->setNumero_celular($_POST['celular']);
			$compañero->setContraseña($_POST['contraseña']);
			// $sala->setIdSala(base64_decode($Sala)); //por sesion
			$compañero->editar();

			break;
		case 'eliminar':
			$compañero->setId($_GET['id']);
            // $sala->setIdSala(base64_decode($Sala)); //por sesion
			$compañero->eliminar();

			break;
	}
}

header('location: ../vistas/compañero/index.php');


?>
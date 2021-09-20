<?php require '../modelos/Administrador.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';



if ($accion != '') {
	$A = new  Administrador();  // A es administrador 
    $sala = new Sala(); 
    //$A es ADMINISTRADOR

	switch ($accion) {
		case 'Ingresar':
			$A->setNombre( $_POST['nombre']) ;
            $A->setCorreo($_POST['correo']);
            $A->setContraseña($_POST['contraseña']);
            $A->setNumero_celular($_POST['celular']);
           // $sala->setIdSala($_POST['sala']); //sala se setea por sesion 
			$A->ingresar();
            
 
			break;
		case 'Editar':
			$A->setId(base64_decode($_POST['id']));
			$A->setNombre( $_POST['nombre']);
           // $sala->setCorreo($_POST['correo']); //por sesion
            $A->setNumero_celular($_POST['celular']);
            $A->setContraseña($_POST['contraseña']);
			$A->editar();
            

			break;
		case 'eliminar': 
			$A->setId($_GET['id']);
            // $sala->setIdSala(base64_decode($_GET['IdSala'])); //por sesion
			$A->eliminar();

			break;
        
	}
}

header('location: ../vistas/administrador/index.php');

?>

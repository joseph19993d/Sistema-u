     
<?php 
require_once '../modelos/Administrador.php';
require_once '../modelos/Sala.php';
$accion = $_POST['a'] ?? $_GET['a'] ?? '';
if ($accion != '') {
	$A = new  Administrador();  // A es administrador 
    $sala = new Sala();
    //$A es ADMINISTRADOR
	switch ($accion) {
		case 'Crear':
            /*
			$sala->setCorreo( $_POST['correo']) ;
			$sala->ingresar();
            $numero_sala= Sala::obtenerPorCorreo( $_POST['correo']);
            foreach (Administrador::listar() as $fila ) { 
                if ($_POST['correo'] == $fila[3]){  $n_sala = $ifla[4];  $n_id=$fila[0]; } }
            $A->setId($n_fila);
            $A->setSala('123');
            $A->editarSala();
            */
			$A->setNombre( $_POST['nombre']) ;
            $A->setCorreo($_POST['correo']);
            $A->setContraseña($_POST['contraseña']);
            $A->setNumero_celular($_POST['celular']);
			$A->ingresar();
			break;       

	}
}
header('location: ../vistas/administrador/index.php');
?>
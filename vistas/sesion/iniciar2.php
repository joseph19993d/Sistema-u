
<?php //INICI DE SESION DE uSUARIO
session_start();
if ( 
	isset($_SESSION['CORREO'])== true && empty($_SESSION['CORREO']) == false )
{
 

 if ($_SESSION['ROL']= 'Usuario' || $_SESSION['ROL']= 'compañero') {
   # code...
   header('location:bienvenida.php ');

 }
 

}


// segun "a" sea una opcion, se ejecutara lo correspondiente pasandole los datos desde aqui a el modelo roles
/* DATOS:
		$this->nombre = '';
        $this->correo ="";
        $this->contraseña="";
        $this->numero_celular="";
        $this->sala="";
*/
/*
$accion = $_POST['a'] ?? $_GET['a'] ?? '';



if ($accion != '') {
	$A = new  Usuario();  // A es Usuario 
    $sala = new Sala(); 
    //$A es Usuario

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
            
        case 'iniciar': 

        

$nombre = $_POST['nombre'];

echo $nombre;
            break;
        
        
	}
}
*/
//header('location: ../vistas/Usuario/index.php');

?>


<!DOCTYPE html>
<html>

<head>
<title>Usuario/iniciar sesion </title>
     
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">





</head>
<body>
<? include '../mejoras/mobil.php'; ?>
<!-------------- inicio de pagina "page" ----------->

<div data-role="page"  data-theme="a">
<!-------------- Pagina header ----------->
<div data-role="main" class="ui-contem">
<div data-role="header">
<h1> Usuario </h1>

<a  class="ui-btn ui-icon-home ui-btn-icon-top ui-corner-all"  href="../index.php"> Inicio</a>
</div>
<!--------------  Pagina main content ----------->
<div data-role="main" class="ui-content"   >

<div> <h2 >Iniciar sesion  </h2> </div>


<form method="post" action="comprobacion.php" data-ajax="True">
<!-- INICIO  DE CAMPOS label & input   -->
<label for="email">Email: <span>*</span></label>
<input type="email" id="email" name="correo"  maxlength="25" placeholder="Email"  class="required" />

<label for="d" > Contraseña: <span>*</span> </label>
<input type="password" id="d" name="contraseña"   placeholder="contraseña" minlength="7" maxlength="25" required/>

<!-- FIN  DE CAMPOS label & input   -->

<input type="submit" name="a" value="iniciar_U" data-theme="b"  >
</form>
</div>


</body>
</html>
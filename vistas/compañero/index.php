<?php


session_start();
if ( 
	isset($_SESSION['CORREO'])== true && empty($_SESSION['CORREO']) == false )
{
 
 $nombre2=$_SESSION['NOMBRE'];
 $correo=$_SESSION['CORREO'];
 $rol=$_SESSION['ROL'];
}else{ 
header('location:../sesion/bienvenida.php ');

  }

$nombre="COMPAÑERO";
try {
	//code...


require_once '../../modelos/compañero.php'; 
require_once '../../modelos/Rol.php'
 ?>

<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
	<title><?=$nombre ?>S</title>
	<?php  include '../mejoras/mobil.php';  ?>
</head>
<body>
<div data-role="header" >
         <h1  ><?=$nombre?>S </h1>
         <div data-role="controlgroup" data-type="horizontal">
      <p> </p>

      <a href="../administrador/index.php" class="ui-btn ui-icon-search ui-btn-icon-top ">Administrador </a>
      <a href="../invitados/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">Invitado</a>
      <a href="../gastos/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">Gasto</a>

      <a href="../sala/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">sala</a>

    </div>

<!--FIN OPCIONES verticales -->
<!--INICIO OPCIONES principales -->
<a  class="ui-btn ui-icon-home ui-btn-icon-top ui-corner-all"  href=" ../sesion/bienvenida.php "> Inicio</a>
<a  class="ui-btn ui-icon-lock ui-btn-icon-top ui-corner-all" href = "../sesion/cerrar.php " >Cerra sesion</a>
<!--FIN OPCIONES principales-->
</div>
    
    
    
  </div>


	
	<?php 
	
	
	
	 ?> 
	
	<a class="ui-btn" href="ingresar.php?nombre= <?=$nombre ?>" data-position="center"  width="60px">INGRESAR NUEVO <?=$nombre ?></a>



	<table border="2" data-role="table" data-mode="columntoggle" class="ui-responsive ui-shadown" border="100" width="100x" >
			<thead>
                <tr>
                <?php 
        /* DATOS:
		$this->nombre = '';
        $this->correo ="";
        $this->contraseña="";
        $this->numero_celular="";
        $this->sala="";
        */  
        ?>
        
                    <th data-priority="1">  Id </th>
                    <th data-priority="2">  Nombre</th>
                    <th data-priority="3">  Numero celular</th>
                    <th data-priority="4">  Correo</th>
                   <!-- <th data-priority="3">  Contraseña</th> -->
                    
                    <th data-priority="5">  Sala </th>
					<th colspan="2" data-priority="6">   Opciones </th>
					
					
         
                </tr>
            </thead>

			<?php foreach (compañero::listar() as $fila ) { ?>
				
            <tbody>
                <tr>
             
				
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td><?= $fila[3] ?></td>
                    <td><?= $fila[4] ?></td>
                    <?if($rol='administrador'){ ?> 
                        <td  width="15px" >
						<a href="editar.php?nombre=<?=$nombre ?>&id=<?=base64_encode($fila[0])?>" class="ui-btn" >Editar</a>
					</td>

                	<td  width="15px" > 
						<a href="../../controladores/compañeros.php?&a=eliminar&id=<?=$fila[0]?> " class="ui-btn" onclick="return confirm('¿Desea eliminar?')" >Eliminar</a>
					</td>
                    <?}elseif($rol='compañero'){?>


                    <?}?>
                   
                    


                	
                </tr>
				<?php }// id	nombre	numero_celular	correo	sala	contraseña	rol	 ?>
			</tbody>
	</table>
			
		
<?php
 include '../mejoras/piesera.php'; //incluimos el pie de pagina
?>	
</body>
</html>
<?php
 } catch (Exception $e) {
	//throw $th;
   

} ?>
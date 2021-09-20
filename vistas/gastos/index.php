<?php
$total=0;
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

$nombre="GASTO";
try {
	//code...


require_once '../../modelos/Gasto.php'; 
require_once '../../modelos/Rol.php' ?>

<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
	<title><?=$nombre?>S</title>
	<?php  include '../mejoras/mobil.php';  ?>
</head>
<body>
<div data-role="header" >
         <h1  ><?=$nombre ?> </h1>
         <div data-role="controlgroup" data-type="horizontal">
      <p> </p>
      <a href="../administrador/index.php" class="ui-btn ui-icon-search ui-btn-icon-top ">Administrador </a>
      <a href="../compañero/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">Usuario</a> <!---->
      <a href="../invitados/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">Invitado</a>

      <a href="../sala/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">sala</a>

    </div>

<!--FIN OPCIONES verticales -->
<!--INICIO OPCIONES principales -->
<a  class="ui-btn ui-icon-home ui-btn-icon-top ui-corner-all"  href=" ../sesion/bienvenida.php "> Inicio</a>
<a  class="ui-btn ui-icon-lock ui-btn-icon-top ui-corner-all" href = "../sesion/cerrar.php" >Cerra sesion</a>
<!--FIN OPCIONES principales-->
</div>
    
    
    
  </div>


	
	<?php 
	
	
	
	 ?> 
	
	<a class="ui-btn" href="ingresar.php?nombre= <?=$nombre ?>" data-position="center"  width="60px">INGRESAR NUEVO <?=$nombre ?></a>



	<table border="2" data-role="table" data-mode="columntoggle" class="ui-responsive ui-shadown"  width="100x" >
			<thead>
                <tr>
<?php 

/*
DATOS A TENER EN CUANTA 

			INSERT INTO `gasto` 
			(`id`, `sala`, `correo_creador`, `fecha_creacion`, `nombre_responsable`, `total`, `nombre_gasto`, `tipo_gasto`, `decripcion`) 
			VALUES ('1', '23', 'dasd', '2021-05-05', 'asdasd', '3234', 'sadasd', '23asdasd', '');
			`correo_creador`, `fecha_creacion`, `nombre_responsable`, `total`, `nombre_gasto`, `tipo_gasto`, `decripcion`"

 */?>

        
                    <th data-priority="1"> Correo de creador </th>
                    <th data-priority="2">  Fecha de gasto </th>
                    <th data-priority="3">  nombre_responsable</th>
                    <th data-priority="4">  Total</th>
                    <th data-priority="5">  Nombre de el gasto</th>
                    <th data-priority="6">  Tipo de gasto</th>
                    <th data-priority="7"> Descripcion</th>
                    <th data-priority="8"> ID</th>

					<th colspan="2" data-priority="20">   Opciones </th>
                </tr>
            </thead>


			<?php foreach (Gasto::listar() as $fila ) { ?> 
				
            <tbody>
                <tr>
             
				
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td><?= $fila[3] ?></td>
                    <?  ?>
                    <td><?= $fila[4] ?></td>
                    <td><?= $fila[5] ?></td>
                    <td><?= $fila[6] ?></td>
                    <td><?= $fila[7] ?></td>
                    

                    <?if($rol=='administrador'){ ?>
                    
                	<td  width="15px" >
						<a href="editar.php?nombre=<?=$nombre ?>&id=<?=base64_encode($fila[7])?>" class="ui-btn" >Editar</a>
					</td>

                	<td  width="15px" > 
						<a href="../../controladores/Gastos.php?&a=eliminar&id=<?=$fila[7]?> " class="ui-btn" onclick="return confirm('¿Desea eliminar?')" >Eliminar</a>
                        <!--// la $fila[] que se meandara debe ser el id segun como lo hayamos pedidos en el modelo, mirar su posicion-->
					</td>


                    <?}elseif($rol=='compañero'){?>
                        <td  width="15px" >
						<a href="editar.php?nombre=<?=$nombre ?>&id=<?=base64_encode($fila[7])?>" class="ui-btn" >Editar</a>
                        <h4>Total:<?= $total=($fila[3]+$total); ?> </h4> 
					</td>

                    <?}?>


                

                </tr>
				<?php } ?>

               
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
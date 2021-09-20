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

$nombre="SALA";
try {
	//code...


require_once '../../modelos/sala.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
<head>
	<title><?=$nombre ?></title>
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
      <a href="../gastos/index.php" class="ui-btn ui-icon-search ui-btn-icon-top">Gasto</a>
 

    </div>

<!--FIN OPCIONES verticales -->
<!--INICIO OPCIONES principales -->
<a  class="ui-btn ui-icon-home ui-btn-icon-top ui-corner-all"  href=" ../sesion/bienvenida.php "> Inicio</a>
<a  class="ui-btn ui-icon-lock ui-btn-icon-top ui-corner-all" href = "../sesion/cerrar.php" >Cerra sesion</a>
<!--FIN OPCIONES principales-->
    
    
    
  </div>


	
	<?php 
	  // include '../mejoras/navegador2.php'; 
	 ?> 
	
 	<a class="ui-btn" href="ingresar.php?nombre= <?=$nombre ?>" data-position="center" >INGRESAR NUEVA <?=$nombre ?></a>



	<table border="2" data-role="table" data-mode="columntoggle" class="ui-responsive ui-shadown" border="100" width="100x" >
			<thead>
                <tr>
                    <th data-priority="1"> Id </th>
                    <th data-priority="2"> Correo</th>
					
					<th colspan="2" data-priority="3">   Opciones </th>
					<!--
					<th width ="15px" data-priority="5" > <form action="../../controladores/actualizar.php" method="post">
		            <input  width="15px"  name="a" type="submit" value="Refrescar" />
					</form></a></th>
					-->

					
         
                </tr>
            </thead>

			<?php foreach (Sala::listar() as $fila) { ?>
				
            <tbody>
                <tr>
				
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
					

					<?if($rol='administrador'){ ?> 
					<!--
					<td  width="15px" >
						<a href="editar.php?nombre=<?//=$nombre ?>&id=<?//=base64_encode($fila[0])?>" class="ui-btn" >Editar</a>
					</td>
					-->
                	<td  width="15px" > 
						<a href="../../controladores/Salas.php?&a=eliminar&id=<?=base64_encode($fila[0])?> " class="ui-btn" onclick="return confirm('¿Desea eliminar?')" >Eliminar</a>
					</td>

                    <?}elseif($rol='compañero'){?>


                    <?}?>


			
                </tr>
				<?php } ?>
			</tbody>
	</table>
			
		
<?php include '../mejoras/piesera.php'; ?>	
</body>
</html>
<?php
 } catch (Exception $e) {
	//throw $th;
	$ActualizarDespuesDe = 10;
	header('Refresh: '.$ActualizarDespuesDe);

} ?>
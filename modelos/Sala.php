<?php

 require_once 'Conexion.php';
 class Sala  
 {
 private $id_sala;
 private $correo;

     public function __construct() {
         $this->id_sala = 0;
         $this->correo = 0;
         $this->conexion = new Conexion();
     }


     public function setIdSala($id_sala)
     {
        $this->id_sala = $id_sala;
         return $id_sala;
     }

     public function getIdSala()
     {
         $id_sala=$this->id_sala;
         return $id_sala;
     }

     public function setCorreo($correo)
     {
         $this->correo=$correo;
         return $correo;
     }

     public function getCorreo()
     {
         $correo=$this->correo;
         return $correo;
     }

     
 //____________________Metodos para la conexion con la base de datos salas___________________________

//Mostrar los datos en la base de datos salas
 public static function listar () {
    $conexion = new Conexion ();
    $listado = $conexion->consultar("SELECT * FROM salas ");
   // echo"INSERT INTO `salas` (`correo`) VALUES ( 'josseph@gmail.com')";
    $conexion->cerrar();
    return $listado;
}

//Consultar la base de datos segun el id
public static function obtenerPorCorreo ($correo) {
    $conexion = new Conexion ();
    $listado = $conexion->consultar("SELECT * FROM salas WHERE correo= $correo");
    $conexion->cerrar();
    return $listado[0];
}


public static function obtenerPorId ($id_sala) {
    $conexion = new Conexion ();
    $listado = $conexion->consultar("SELECT * FROM salas WHERE id = $id_sala");
    $conexion->cerrar();
    return $listado[0];
}
//ingresar nuevos datos 
public function ingresar () {
    $s = "INSERT INTO salas (correo) VALUES ('$this->correo')";
    $resultado = $this->conexion->actualizar($s);
    $this->conexion->cerrar();
    return $resultado;
}
//eliminar datos por id 
public function eliminar () {
    $s = "DELETE FROM salas WHERE id = $this->id_sala";
    $resultado = $this->conexion->actualizar($s);
    $this->conexion->cerrar();
    return $resultado;
}
//editar datos segun donde la id sea 
public function editar () {
    $s = "UPDATE salas SET correo = '$this->correo' WHERE id = $this->id_sala";
    $resultado = $this->conexion->actualizar($s);
    $this->conexion->cerrar();
    return $resultado;
}
}
 

?>


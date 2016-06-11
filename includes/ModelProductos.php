<?php
require_once "ConnectDB.php";
require_once "Producto.php";
class ModelProductos{
    private $conexion ="";

    public function __construct(){
        $this->conexion = new ConnectDB();
    }

    public function add(Producto $producto){
        $this->conexion->query("INSERT INTO productos(`descripcion`,`familia`,`pvp`)VALUES(:descripcion,:familia,:pvp)",array(

        ':descripcion'=>$producto->getDescripcion(),

        ':familia'=>$producto->getFamilia(),

        ':pvp'=>$producto->getPvp(),

        ));
    }
    public function editarProducto($id,Producto $producto){
         $this->conexion->query("INSERT INTO usuarios(`descripcion`,`familia`,`pvp`)VALUES(:descripcion,:familia,:pvp) WHERE id=:id",array(
        ':id'=>$id,
        ':descripcion'=>$producto->getDescripcion(),
        ':familia'=>$producto->getFamilia(),

        ':pvp'=>$producto->getPvp(),


        ));
    }
    public function buscarPorId($id){
        return $this->conexion->query("SELECT * FROM productos WHERE id=:id",array(':id'=>$id))[0];
    }
    public function mostrar(){
        return $this->conexion->query("SELECT * FROM productos");
    }
    public function login($email,$contraseña){
        return $this->conexion->query("SELECT * FROM alumnos WHERE username=:email and password=:psw",array(':email'=>$email,':psw'=>$contraseña));
    }
}
?>

<?php
require_once "ConnectDB.php";
require_once "Pedido.php";
class ModelPedidos{
    private $conexion ="";

    public function __construct(){
        $this->conexion = new ConnectDB();
    }

    public function add(Pedido $pedido){
        $this->conexion->query("INSERT INTO pedidos(`fecha`,`idUsuario`,`estado`)VALUES(:fecha,:idUsuario,:estado)",array(

        ':fecha'=>$pedido->getFecha(),

        ':idUsuario'=>$pedido->getIdUsuario(),

        ':estado'=>$pedido->getEstado(),

        ));
    }
    public function editarProducto($id,Pedido $pedido){
         $this->conexion->query("INSERT INTO pedidos(`fecha`,`idUsuario`,`estado`)VALUES(:fecha,:idUsuario,:estado) WHERE id=:id",array(
        ':id'=>$id,
        ':fecha'=>$pedido->getFecha(),

        ':idUsuario'=>$pedido->getIdUsuario(),

        ':estado'=>$pedido->getEstado(),


        ));
    }
    public function buscarPorId($id){
        return $this->conexion->query("SELECT * FROM pedidos WHERE id=:id",array(':id'=>$id))[0];
    }
    public function mostrar(){
        return $this->conexion->query("SELECT * FROM pedidos");
    }
    public function getUltimoPedido(){
      $pedidos=$this->conexion->query("SELECT * FROM pedidos");
      return $pedidos[count($pedidos)-1];
    }
    public function buscarPorUsuario($id){
        return $this->conexion->query("SELECT * FROM pedidos WHERE idusuario=:id",array(':id'=>$id));
    }


}
?>

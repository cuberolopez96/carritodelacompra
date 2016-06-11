<?php
require_once "ConnectDB.php";
require_once "DetPedido.php";
class ModelProductos{
    private $conexion ="";

    public function __construct(){
        $this->conexion = new ConnectDB();
    }

    public function add(DetPedido $detpedido){
        $this->conexion->query("INSERT INTO detpedidos(`idpedido`,`idProducto`,`unidades`,`importe`)VALUES(:idpedido,:idproducto,:unidades,:importe)",array(

        ':idpedido'=>$detpedido->getIdPedido(),

        ':idproducto'=>$detpedido->getidProducto(),

        ':unidades'=>$detpedido->getUnidades(),
        ':importe'=>$detpedido->getImporte(),


        ));
    }
    public function editarProducto($id,Producto $producto){
         $this->conexion->query("INSERT INTO detpedidos(`idpedido`,`idProducto`,`unidades`,`importe`)VALUES(:idpedido,:idproducto,:unidades,:importe) WHERE id=:id",array(

         ':idpedido'=>$detpedido->getIdPedido(),

         ':idproducto'=>$detpedido->getidProducto(),

         ':unidades'=>$detpedido->getUnidades(),
         ':importe'=>$detpedido->getImporte(),


         ));
    }
    public function buscarPorId($id){
        return $this->conexion->query("SELECT * FROM detpedidos WHERE id=:id",array(':id'=>$id))[0];
    }
    public function mostrar(){
        return $this->conexion->query("SELECT * FROM detpedidos");
    }
}
?>

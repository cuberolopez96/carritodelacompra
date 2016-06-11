<?php class DetPedido{
    private $idpedido="";
    private $idproducto="";
    private $unidades="";
    private $importe="";
    public function __construct($idpedido,$idproducto,$unidades,$importe){
        $this->idpedido=$idpedido;
        $this->idproducto=$idproducto;
        $this->unidades=$unidades;
        $this->importe = $importe;


    }
    public function getIdPedido(){
        return $this->idpedido;
    }
     public function getidProducto(){
        return $this->idproducto;
    }
     public function getUnidades(){
        return $this->unidades;
    }

     public function getImporte(){
        return $this->importe;
    }


   }?>

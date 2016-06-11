<?php class Pedido{
    private $fecha="";
    private $idUsuario="";
    private $estado="";
    public function __construct($fecha,$idUsuario,$estado){
        $this->fecha=$fecha;
        $this->idUsuario=$idUsuario;
        $this->estado=$estado;


    }
    public function getFecha(){
        return $this->fecha;
    }
     public function getIdUsuario(){
        return $this->idUsuario;
    }
     public function getEstado(){
        return $this->estado;
    }


   }?>

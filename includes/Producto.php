<?php class Producto{
    private $descripcion="";
    private $familia="";
    private $pvp="";
    public function __construct($descripcion,$familia,$pvp){
        $this->descripcion=$descripcion;
        $this->familia=$familia;
        $this->pvp=$pvp;


    }
    public function getDescripcion(){
        return $this->descripcion;
    }
     public function getFamilia(){
        return $this->familia;
    }
     public function getPvp(){
        return $this->pvp;
    }


   }?>

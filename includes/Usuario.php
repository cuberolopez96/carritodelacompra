<?php class Usuario{
    private $nombre="";
    private $usuario="";
    private $password="";
    private $perfil="";
    public function __construct($nombre,$username,$password,$perfil){
        $this->nombre=$nombre;
        $this->username=$username;
        $this->password=$password;
        $this->perfil=$perfil;
        
    }
    public function getNombre(){
        return $this->nombre;
    }
     public function getUsername(){
        return $this->username;
    }
     public function getPassword(){
        return $this->password;
    }
     public function getPerfil(){
        return $this->perfil;
    }
    
   }?>
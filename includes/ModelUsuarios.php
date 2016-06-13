<?php
require_once "ConnectDB.php";
require_once "Usuario.php";
class ModelUsuarios{
    private $conexion ="";

    public function __construct(){
        $this->conexion = new ConnectDB();
    }
    public function add(Usuario $usuario){
        $this->conexion->query("INSERT INTO usuarios(`nombre`,`usuario`,`password`,`perfil`)VALUES(:nombre,:username,:password,:perfil)",array(
        ':nombre'=>$usuario->getNombre(),
        ':username'=>$usuario->getUsername(),

        ':password'=>$usuario->getPassword(),

        ':perfil'=>$usuario->getPerfil(),

        ));
    }
    public function editarAlumno($id,Usuario $usuario){
         $this->conexion->query("INSERT INTO usuarios(`nombre`,`username`,`password`,`perfil`)VALUES(:nombre,:username,:password,:perfil) WHERE id=:id",array(
        ':nombre'=>$usuario->getNombre(),
        ':username'=>$usuario->getUsername(),

        ':password'=>$usuario->getPassword(),

        ':perfil'=>$usuario->getPerfil(),
        ));
    }
    public function buscarPorId($id){
        return $this->conexion->query("SELECT * FROM usuarios WHERE id=:id",array(':id'=>$id))[0];
    }
    public function mostrar(){
        return $this->conexion->query("SELECT * FROM usuarios");
    }
    public function login($usuario,$contraseña){
        return $this->conexion->query("SELECT * FROM usuarios WHERE usuario=:email and password=:psw",array(':email'=>$usuario,':psw'=>$contraseña));
    }
}
?>

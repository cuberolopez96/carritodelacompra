<?php
if(isset($_POST['add'])&&isset($_POST['nombre'])&&isset($_POST['username'])&&isset($_POST['psw'])){
    $usuario = new Usuario($_POST['nombre'],$_POST['username'],$_POST['psw'],'Clientes');
    $modelUsuarios->add($usuario);

}
?>
<div id="formulario">
    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
        <div class="form-group col-xs-6"><label for="">Nombre</label><input type="text" class="form-control col-xs-6" name="nombre"></div>
        <div class="form-group col-xs-6"><label for="">Username</label><input type="text" class="form-control" name="username"></div>

        <div class="form-group col-xs-6"><label for="">Contraseña</label><input type="text" class="form-control " name="psw"></div>

        <input type="submit" class="btn btn-default" name="add" value="añadir">
    </form>
</div>

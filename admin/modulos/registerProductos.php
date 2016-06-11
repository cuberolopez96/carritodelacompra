<?php
if(isset($_POST['add'])&&isset($_POST['descripcion'])&&isset($_POST['familia'])&&isset($_POST['pvp'])){
    $producto = new Producto($_POST['descripcion'],$_POST['familia'],$_POST['pvp']);
    $modelProductos->add($producto);

}
?>
<div id="formulario">
    <form action=<?php echo $_SERVER['PHP_SELF'].'?opcion=gestionproductos&tipogestion=add'; ?> method="post">
        <div class="form-group col-xs-6"><label for="">descripcion</label><input type="text" class="form-control col-xs-6" name="descripcion"></div>
        <div class="form-group col-xs-6"><label for="">familia</label><input type="text" class="form-control" name="familia"></div>

        <div class="form-group col-xs-6"><label for="">PVP</label><input type="text" class="form-control " name="pvp"></div>

        <input type="submit" class="btn btn-default" name="add" value="añadir">
    </form>
    <a href=<?php echo $_SERVER['PHP_SELF'].'?opcion=usuarios';?> class="btn btn-default">volver</a>
</div>

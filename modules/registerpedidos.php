<?php
$producto = $modelProductos->buscarPorId($_GET['id']);
if(isset($_POST['add'])&&isset($_POST['unidades'])&&isset($_POST['importe'])){



}
?>
<div id="formulario">
    <form action=<?php echo $_SERVER['PHP_SELF'].'?opcion=gestionproductos&tipogestion=add'; ?> method="post">

        <div class="form-group col-xs-6"><label for="">unidades</label><input type="text" class="form-control" name="familia"></div>

        <div class="form-group col-xs-6"><label for="">importe</label><input type="text" class="form-control " name="importe" value=<?php echo $producto['importe']." X unidades"?>></div>

        <input type="submit" class="btn btn-default" name="add" value="añadir">
    </form>
    <a href=<?php echo $_SERVER['PHP_SELF'].'?opcion=usuarios';?> class="btn btn-default">volver</a>
</div>

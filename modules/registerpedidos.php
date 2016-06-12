<?php
$producto = $modelProductos->buscarPorId($_GET['id']+1);

if(isset($_POST['add'])&&isset($_POST['unidades'])){
$modelPedidos->add(new Pedido( date("Y-m-d H:i:s"),1,'Pendiente'));
$ultimoPedido= $modelPedidos->getUltimoPedido();
$modeldetallespedidos->add(new DetPedido($ultimoPedido['id'],$producto['id'],$_POST['unidades'],$producto['pvp']*$_POST['unidades']));


}
?>
<div id="formulario">
    <form action=<?php echo "$_SERVER[PHP_SELF]?id=$_GET[id]"; ?> method="post">

        <div class="form-group col-xs-6"><label for="">unidades</label><input type="number" min="0" max="10" class="form-control" name="unidades"></div>

        <div class="form-group col-xs-6"><label for="">importe</label><input type="text" class="form-control " name="importe" value=<?php echo "$producto[pvp]xunidades"; ?> disabled ></div>

        <input type="submit" class="btn btn-default" name="add" value="añadir">
    </form>
    <a href=<?php echo $_SERVER['PHP_SELF'].'?opcion=usuarios';?> class="btn btn-default">volver</a>
</div>

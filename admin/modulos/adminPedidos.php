<div class="row">
    <form action="" class="inline-form">
        <label for="">Search</label>
        <input type="text" class="form-control">
        <input type="submit" class="btn btn-default" value="buscar">
    </form>
    <a href=<?php echo $_SERVER['PHP_SELF'].'?opcion=gestionproductos&tipogestion=add'?> class="btn btn-default">añadir</a>

</div>
 <div class="row">
                    <div class="col-lg-12">
                       <?php $pedidos = $modelPedidos->mostrar();

                        ?>
                        <table class="table">
                            <tr>
                            <th>fecha</th>
                            <th>Usuario</th>
                            <th>estado</th>
                            </tr>
                            <?php
                            foreach($pedidos as $pedido){
                                echo "<tr><td>$pedido[fecha]</td><td>$pedido[idusuario]</td><td>$pedido[estado]</td></tr>";
                            }
                            ?>
                        </table>

                    </div>

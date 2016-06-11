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
                       <?php $productos = $modelProductos->mostrar();

                        ?>
                        <table class="table">
                            <tr>
                            <th>descripcion</th>
                            <th>familia</th>
                            <th>pvp</th>
                            </tr>
                            <?php
                            foreach($productos as $producto){
                                echo "<tr><td>$producto[descripcion]</td><td>$producto[familia]</td><td>$producto[pvp]</td></tr>";
                            }
                            ?>
                        </table>

                    </div>

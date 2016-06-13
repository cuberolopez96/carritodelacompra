<article class="col-md-12">
  <table class="table">
      <tr>
        <th>
          Producto
        </th>
        <th>
          unidades
        </th>
        <th>
          fecha
        </th>
        <th>
          importe
        </th>
        <th>
          estado
        </th>
      </tr>
      <?php
      $pedidos = $modelPedidos->buscarPorUsuario($_SESSION['usuario']['id']);

            $detallepedido = "";
            $producto ="";
            if(isset($pedidos)){foreach ($pedidos as $key => $pedido) {
              if(isset($pedido)){
                echo $pedido['fecha'];
                $detallepedido = $modeldetallespedidos->buscarPorPedido($pedido['id']);
                $producto = $modelProductos->buscarPorId($detallepedido['idproducto']);
                echo "<tr><td>$producto[descripcion]</td><td>$detallepedido[unidades]</td><td>$pedido[fecha]</td><td>$detallepedido[importe]</td><td>$pedido[estado]</td></tr>";
              }

            }}?>
  </table>


</article>


    <?php
      $productos = $modelProductos->mostrar();
      foreach ($productos as $id => $producto) {
        echo "<article class=\"panel-body\">
          Descripcion:$producto[descripcion]
          Precio: $producto[pvp]
          <a href=\"realizarpedido.php?id=$id\" class=\"btn btn-default\">Comprar</a>
        </article>  ";
      }
    ?>

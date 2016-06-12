<section>
    <?php
      $productos = $modelProductos->mostrar();
      foreach ($productos as $id => $producto) {
        echo "<article>
          Descripcion:$producto[descripcion]
          Precio: $producto[pvp]
          <a href=\"$_SERVER[PHP_SELF]?opcion=regpedido&id=$key\"></a>
        </article>  "
      }
    ?>
</section>

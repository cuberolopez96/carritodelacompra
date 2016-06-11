<div class="row">
    <form action="" class="inline-form">
        <label for="">Search</label>
        <input type="text" class="form-control">
        <input type="submit" class="btn btn-default" value="buscar">
    </form>
    <a href=<?php echo $_SERVER['PHP_SELF'].'?opcion=gestionusuarios&tipogestion=add'?> class="btn btn-default">añadir</a>
    
</div>
 <div class="row">
                    <div class="col-lg-12">
                       <?php $usuarios = $modelUsuarios->mostrar();
                            
                        ?>
                        <table class="table">
                            <tr>
                            <th>Nombre</th>
                            <th>Username</th>
                            <th>Perfil</th>
                            </tr>
                            <?php 
                            foreach($usuarios as $usuario){
                                echo "<tr><td>$usuario[nombre]</td><td>$usuario[usuario]</td><td>$usuario[perfil]</td></tr>";
                            }
                            ?>
                        </table>                       
                        
                    </div>
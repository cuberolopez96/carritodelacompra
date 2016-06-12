<?php require_once "modules/header.php";?>

    <main>
        <section id="logueoyregistro" class="row">
            <article id="logueo" class="col-md-6">
                <?php require_once "modules/loginAlumno.php" ?>
            </article>
            <article class="col-md-6" id="register">
                <?php require_once "modules/register.php" ?>
            </article>

        </section>

        <section class="row panel panel-default">

            <?php require_once "modules/listaProductos.php" ?>


        </section>

    </main>
    <?php require_once "modules/footer.php";?>

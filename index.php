<?php require_once "modules/header.php";?>

    <main>
        <section id="logueoyregistro" class="row">
            <article id="logueo" class="col-md-6">
                <?php if(!isset($_SESSION['usuario'])){
                  require_once "modules/loginAlumno.php";
                }else{
                  echo "estas logueado como: ".$_SESSION['usuario']['usuario'];
                  echo"<a href=\"cerrarSesion.php\" class=\"btn btn-default\">cerrar sesion</a>";
                } ?>
            </article>
            <article class="col-md-6" id="register">
                <?php require_once "modules/register.php"; ?>
            </article>

        </section>
        <section class="row">
            <?php if(isset($_SESSION['usuario'])){
              require_once "modules/nav.php";
            }?>
        </section>

        <section class="row panel panel-default">

            <?php if(isset($_GET['option'])){switch($_GET['option']){
              case "listaproductos":
                require_once "modules/listaProductos.php";
                break;
              case "mispedidos":
                require_once "modules/MisPedidos.php";
                break;
              case "micuenta":
                require_once "modules/Micuenta.php";
                break;

              default:
                require_once "modules/listaProductos.php";
                break;
              }
            }else{
                require_once "modules/listaProductos.php";
              }?>


        </section>

    </main>
    <?php require_once "modules/footer.php";?>

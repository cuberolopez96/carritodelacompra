<?php
if(isset($_GET['opcion'])&&$_GET['opcion']=="gestionproductos"){
    if(isset($_GET['tipogestion'])&&$_GET['tipogestion']=="add"){
        require_once "registerProductos.php";
    }else{
        if(isset($_GET['tipogestion'])&&$_GET['tipogestion']=="edit"){

        }
    }
}
?>

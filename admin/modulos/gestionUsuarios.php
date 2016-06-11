<?php
if(isset($_GET['opcion'])&&$_GET['opcion']=="gestionusuarios"){
    if(isset($_GET['tipogestion'])&&$_GET['tipogestion']=="add"){
        require_once "register.php";
    }else{
        if(isset($_GET['tipogestion'])&&$_GET['tipogestion']=="edit"){
            
        }
    }
}
?>
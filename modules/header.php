<?php
//session_start();
//
//require_once 'includes/ModelEmpresas.php';
require_once 'includes/ModelUsuarios.php';
require_once "includes/ModelProductos.php";
require_once "includes/ModelPedidos.php";
require_once "includes/ModelDetallePedido";
//require_once 'includes/ModelPreguntas.php';
$modelUsuarios = new ModelUsuarios();
$modelProductos = new ModelProductos();
$modelPedidos = new ModelPedidos();
$modeldetallespedidos = new ModelDetallePedido();
//$modelEmpresas = new ModelEmpresas();
//$modelPreguntas = new ModelPreguntas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FCT</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header class="col-xs-12 page-header"><h1>Bienvenido al carrito de la compra</h1></header>

<?php

//$consulta="vacio";
//if(isset($_POST['login'])&&isset($_POST['email'])&&isset($_POST['psw'])){
//    $consulta=$modelAlumnos->login($_POST['email'],$_POST['psw']);
//    print_r($consulta);
//    if(isset($consulta[0])){
//        
//        $_SESSION['usuario']= $consulta[0];
//        
//    }
//    header("location: $_SERVER[PHP_SELF]");
//    
//}
?>
   <div id="login" class = "col-md-12">
    <form class="form-inline col-md-12" action=<?php echo $_SERVER['PHP_SELF'];?> method="post">
    <label for="" class="col-md-12">Email</label>
    <input type="text" name="email" class="form-control col-md-12">
   
        <label for="" class="col-md-12">contraseña</label>
    <input type="password" class="form-control col-md-12" name="psw">
   
    <input type="submit"
    class="btn btn-default" name="login" value="login">
    
    
    </form>
    
</div>
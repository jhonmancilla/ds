<?php

include('conex.php');


if(isset($_POST['registro'])){
    if(strlen($_POST['usuario_id']) >= 1 && 
       strlen($_POST['usuario_nombre']) >=1 && 
       strlen($_POST['usuario_apellido']) >= 1 && 
       strlen($_POST['usuario_login']) >=1 && 
       strlen($_POST['usuario_clave']) >=1 &&
       strlen($_POST['rol_id']) >=1){
        
        

        $usuario_id =($_POST['usuario_id']);
        $usuario_nombre =($_POST['usuario_nombre']);
        $usuario_apellido = ($_POST['usuario_apellido']);
        $usuario_login = ($_POST['usuario_login']);
        $usuario_clave = ($_POST['usuario_clave']);
        $rol_id = ($_POST['rol_id']);

        $consulta = "INSERT INTO usuarios (usuario_id, usuario_nombre, usuario_apellido, usuario_login, usuario_clave, rol_id) VALUES ('$usuario_id','$usuario_nombre','$usuario_apellido','$usuario_login','$usuario_clave','$rol_id')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            ?>
            <h3 class= "ok">  ¡Te has registrado correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class= "ok">  ¡Te has registrado correctamente!</h3>
            <?php
        }
    }
}

    
?>



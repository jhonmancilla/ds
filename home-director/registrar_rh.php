<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");


if(isset($_POST['enviar'])){
    if(strlen($_POST['rh_descripcion']) >=1){
        
        
        
        $rh_descripcion =($_POST['rh_descripcion']);

        $conexion = mysqli_connect("localhost","root","","bd_desercion");

        $consulta = "INSERT INTO rh (rh_descripcion) VALUES ('$rh_descripcion')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            ?>
            
            <?php
            header('Location:listado_rh.php');
        }else{

        }
    }
}
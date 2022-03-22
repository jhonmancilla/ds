<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");

if (isset($_POST['enviar'])){
    if (strlen($_POST['dep_codigo']) >= 1 &&
        strlen($_POST['dep_nombre']) >= 1){

         $dep_codigo = ($_POST['dep_codigo']);
         $dep_nombre = ($_POST['dep_nombre']);

          $consulta = "INSERT INTO departamento (dep_codigo, dep_nombre) VALUES ('$dep_codigo', '$dep_nombre')";
          $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            echo 'Hecho';
            header('location:listado_departamento.php');

        }else{
            echo  "No Hecho";
        }
    }
}
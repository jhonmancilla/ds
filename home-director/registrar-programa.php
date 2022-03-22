<<?php

$conexion = mysqli_connect("localhost","root","","datab_desercion");

if (isset($_POST['enviar'])){
    if (strlen($_POST['pro_codigo']) >= 1 &&
        strlen($_POST['pro_descripcion']) >= 1 &&
        strlen($_POST['pro_estado']) >= 1 &&
        strlen($_POST['apr_id']) >= 1){

         $pro_codigo = ($_POST['pro_codigo']);
         $pro_descripcion = ($_POST['pro_descripcion']);
         $pro_estado = ($_POST['pro_estado']);
         $apr_id = ($_POST['apr_id']);

          $consulta = "INSERT INTO 'programa' (pro_codigo, pro_descripcion, pro_estado, apr_id) VALUES ('$pro_codigo', '$pro_descripcion', '$pro_estado','$apr_id')";
          $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            echo 'Hecho';
            header('location:./formulario-programas.php');
        }else{
            echo  "No Hecho";
        }
    }
}
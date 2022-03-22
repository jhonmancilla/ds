<<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");

if (isset($_POST['enviar'])){
    if (strlen($_POST['ciu_id']) >= 1 &&
        strlen($_POST['ciu_nombre']) >= 1 &&
        strlen($_POST['dep_codigo']) >= 1 &&
        strlen($_POST['ciu_canti_habitantes']) >= 1){

         $ciu_id = ($_POST['ciu_id']);
         $ciu_nombre = ($_POST['ciu_nombre']);
         $dep_codigo = ($_POST['dep_codigo']);
         $ciu_canti_habitantes = ($_POST['ciu_canti_habitantes']);

          $consulta = "INSERT INTO ciudad (ciu_id, ciu_nombre, dep_codigo,ciu_canti_habitantes) VALUES ('$ciu_id', '$ciu_nombre', '$dep_codigo','$ciu_canti_habitantes')";
          $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            header('location:formulario-ciudad.php');
            // echo 'Hecho';
            
        }else{
            // echo  "No Hecho";
        }
    }
}
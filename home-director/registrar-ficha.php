<<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");


if (isset($_POST['enviar'])){
    if (strlen($_POST['fic_numero']) >= 1 &&
        strlen($_POST['pro_codigo']) >= 1 &&
        strlen($_POST['fic_fecha_inicial']) >= 1 &&
        strlen($_POST['der_fecha_fin']) >= 1 &&
        strlen($_POST['cen_codigo']) >= 1){

         $fic_numero= ($_POST['fic_numero']);
         $pro_codigo = ($_POST['pro_codigo']);
         $fic_fecha_inicial = ($_POST['fic_fecha_inicial']);
         $der_fecha_fin = ($_POST['der_fecha_fin']);
         $cen_codigo = ($_POST['cen_codigo']);

          $consulta = "INSERT INTO ficha (fic_numero, pro_codigo, fic_fecha_inicial, der_fecha_fin, cen_codigo) VALUES ('$fic_numero','$pro_codigo', '$fic_fecha_inicial','$der_fecha_fin', '$cen_codigo')";
          $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            echo 'Hecho';
            header('location:formu_ficha.php');
        }else{
            echo  "No Hecho";
        }
    }
}
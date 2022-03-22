<?php

$conexion=mysqli_connect("localhost", "root", "", "bd_desercion");


if(isset($_POST['Ingresar'])){
    if(strlen($_POST['apr_id']) >= 1 &&
        strlen($_POST['fic_numero']) >=1 &&
        strlen($_POST['cad_codigo']) >= 1 &&
        strlen($_POST['usuario_id']) >=1 &&
        strlen($_POST['der_fase']) >=1){

        $apr_id = ($_POST['apr_id']);
        $fic_numero = ($_POST['fic_numero']);
        $cad_codigo = ($_POST['cad_codigo']);
        $usuario_id = ($_POST['usuario_id']);
        $der_fase = ($_POST['der_fase']);

        $consulta = "INSERT INTO desercion (apr_id , fic_numero , cad_codigo , usuario_id , der_fase) VALUES ('$apr_id' , '$fic_numero' , '$cad_codigo' , '$usuario_id' , '$der_fase' )";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            header('location:for_desercion.php');
        }else{
            ?>
            <h3 class= "ok">  ¡No te has registrado correctamente!</h3>
            <?php
        }
    }
}
?>
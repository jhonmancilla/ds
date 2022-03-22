<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");

if(isset($_POST['enviar'])){
    if(strlen($_POST['fic_numero']) >= 1 && 
    strlen($_POST['apr_id'])  >=1 && 
    strlen($_POST['mat_estado']) >=1){

        $cad_codigo =($_POST['fic_numero']);
        $cad_descripcion =($_POST['apr_id']);
        $cad_mat_estado = ($_POST['mat_estado']);

        $consulta = "INSERT INTO matricula (fic_numero,apr_id,mat_estado) VALUES ('$cad_codigo','$cad_descripcion','$cad_mat_estado')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            echo "Registrado con exito";
            header('location:formula_matricula.php');
        }else{
           echo "error por culpa de sebastian";
        }
    }
}

    
?>
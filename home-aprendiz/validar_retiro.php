<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");

if(isset($_POST['enviar'])){
    if(strlen($_POST['cad_descripcion'])  >=1 && 
    strlen($_POST['cad_mat_estado']) >=1){

        $cad_descripcion =($_POST['cad_descripcion']);
        $cad_mat_estado = ($_POST['cad_mat_estado']);

        $consulta = "INSERT INTO `causa_desercion`(cad_descripcion,cad_mat_estado) VALUES ('$cad_descripcion','$cad_mat_estado')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            header("location:formulario_de_retiro.php");
            echo"La informacion sea enviado correctamente";
            
        }else{
            header("location:formulario_de_retiro.php");
            echo"Error en el envio de la informacion";
        }
    }
}

    
?>
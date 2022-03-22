<?php 
include("../conex.php");

$id = $_POST['id'];
$pro_codigo = $_POST['pro_codigo'];
$pro_descripcion = $_POST['pro_descripcion'];
$pro_estado = $_POST['pro_estado'];


$actualizar = "UPDATE programa SET pro_codigo='$pro_codigo', pro_descripcion='$pro_descripcion',  pro_estado='$pro_estado' WHERE pro_codigo='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/listado_programa.php');
} else { 
    // echo "No Registrado";
     }
<?php 
include("../conex.php");

$id = $_POST['id'];
$rh_descripcion = $_POST['rh_descripcion'];



$actualizar = "UPDATE rh SET rh_descripcion='$rh_descripcion' WHERE rh_id='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/listado_rh.php');
} else { 
    // echo "No Registrado";
     }
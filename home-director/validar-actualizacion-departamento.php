<?php 
include("../conex.php");

$id = $_POST['id'];
$dep_codigo = $_POST['dep_codigo'];
$dep_nombre = $_POST['dep_nombre'];


$actualizar = "UPDATE departamento SET dep_codigo='$dep_codigo', dep_nombre='$dep_nombre' WHERE dep_codigo='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/listado_departamento.php');
} else { 
    // echo "No Registrado";
     }
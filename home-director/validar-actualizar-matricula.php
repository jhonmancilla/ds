<?php 
include("../conex.php");

$id = $_POST['id'];
$num_matricula = $_POST['num_matricula'];
$mat_estado = $_POST['mat_estado'];
$fic_numero = $_POST['fic_numero'];
$apr_id = $_POST['apr_id'];

$actualizar = "UPDATE matricula SET num_matricula='$num_matricula', mat_estado='$mat_estado', fic_numero='$fic_numero', apr_id='$apr_id' WHERE num_matricula='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/listado_matricula.php');
} else { 
    // echo "No Registrado";
     }
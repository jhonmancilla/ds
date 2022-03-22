<?php 
include("../conex.php");

$id = $_POST['id'];
$der_id = $_POST['der_id'];
$der_fecha = $_POST['der_fecha'];
$apr_id = $_POST['apr_id'];
$fic_numero = $_POST['fic_numero'];
$cad_codigo = $_POST['cad_codigo'];
$der_fase = $_POST['der_fase'];

$actualizar = "UPDATE desercion SET der_id='$der_id', der_fecha='$der_fecha',  apr_id='$apr_id', fic_numero='$fic_numero', cad_codigo='$cad_codigo', der_fase='$der_fase' WHERE der_id='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/formulario-de-desercion.php');
} else { 
    // echo "No Registrado";
     }
<?php 
include("../conex.php");

$id = $_POST['apr_id'];
$apr_id = $_POST['apr_id'];
$apr_nombre = $_POST['apr_nombre'];
$apr_apellido = $_POST['apr_apellido'];
$ciu_id = $_POST['ciu_id'];
$rh_id = $_POST['rh_id'];
$tip_id = $_POST['tip_id'];
$apr_genero = $_POST['apr_genero'];
$apr_edad = $_POST['apr_edad'];

$actualizar = "UPDATE aprendiz SET apr_id='$apr_id', apr_nombre='$apr_nombre',  apr_apellido='$apr_apellido', ciu_id='$ciu_id', rh_id='$rh_id', tip_id='$tip_id', apr_genero='$apr_genero',apr_edad='$apr_edad' WHERE apr_id='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/listado_aprendiz.php');
} else { 
    // echo "No Registrado";
     }
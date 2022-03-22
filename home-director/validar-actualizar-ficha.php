<?php 
include("../conex.php");

$id = $_POST['id'];
$fic_numero = $_POST['fic_numero'];
$pro_codigo = $_POST['pro_codigo'];
$fic_fecha_inicial = $_POST['fic_fecha_inicial'];
$der_fecha_fin = $_POST['der_fecha_fin'];
$cen_codigo = $_POST['cen_codigo'];

$actualizar = "UPDATE ficha SET fic_numero='$fic_numero', pro_codigo='$pro_codigo',  fic_fecha_inicial='$fic_fecha_inicial', der_fecha_fin='$der_fecha_fin', cen_codigo='$cen_codigo' WHERE fic_numero='$id'"; 

$result=mysqli_query($conexion,$actualizar);

if ($result) {
    // echo "Registrado";
    header('location:../home-director/listado_ficha.php');
} else { 
    // echo "No Registrado";
     }
<?php
include("../conex.php");

$id = $_GET['rh_id'];
$eliminar = "DELETE FROM rh WHERE 	rh_id ='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_rh.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
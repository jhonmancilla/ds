<?php
include("../conex.php");

$id = $_GET['tip_id'];
$eliminar = "DELETE FROM tipo_id WHERE 	tip_id ='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_tip_identificacion.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
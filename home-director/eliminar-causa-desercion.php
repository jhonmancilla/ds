<?php
include("../conex.php");

$id = $_GET['cad_codigo'];
$eliminar = "DELETE FROM causa_desercion WHERE cad_codigo='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_causa_desercion.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
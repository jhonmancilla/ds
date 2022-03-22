<?php
include("../conex.php");

$id = $_GET['apr_id'];
$eliminar = "DELETE FROM aprendiz WHERE apr_id='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:aprendicez.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
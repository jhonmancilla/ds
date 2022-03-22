<?php
include("../conex.php");

$id = $_GET['fic_numero'];
$eliminar = "DELETE FROM ficha WHERE fic_numero='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_ficha.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
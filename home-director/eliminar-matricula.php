<?php
include("../conex.php");

$id = $_GET['num_matricula'];
$eliminar = "DELETE FROM matricula WHERE num_matricula='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_matricula.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
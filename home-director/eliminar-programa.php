<?php
include("../conex.php");

$id = $_GET['pro_codigo'];
$eliminar = "DELETE FROM programa WHERE pro_codigo='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_programa.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
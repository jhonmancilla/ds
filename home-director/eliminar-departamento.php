<?php
include("../conex.php");

$id = $_GET['dep_codigo'];
$eliminar = "DELETE FROM departamento WHERE dep_codigo='$id'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:formulario-departamento.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
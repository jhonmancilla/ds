<?php
$conexion = mysqli_connect("localhost","root","","bd_desercion");

$cen_codigo = $_GET['cen_codigo'];
$eliminar = "DELETE FROM centro WHERE cen_codigo='$cen_codigo'";
$resultadoEli = mysqli_query($conexion,$eliminar);
    if($resultadoEli){
      // echo "se ha eliminado los datos";
      header('location:listado_centros.php');
    }else{
      // echo "no se ha eliminado los datos";
    }
?>
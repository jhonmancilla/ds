<?php
$conexion = mysqli_connect("localhost","root","","bd_desercion");
$id=$_GET['id'];
echo $id;


$datos= mysqli_query ($conexion,"UPDATE desercion  SET estado='Aceptado' WHERE der_id='$id'");
if($datos){
  header('location:listado_deserciones.php');
}

 ?>
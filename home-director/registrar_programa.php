<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");

if (isset($_POST['enviar'])){
    if (strlen($_POST['pro_codigo']) >= 1 &&
        strlen($_POST['pro_descripcion']) >= 1 &&
        strlen($_POST['pro_estado']) >= 1){

         $pro_codigo = ($_POST['pro_codigo']);
         $pro_descripcion = ($_POST['pro_descripcion']);
         $pro_estado = ($_POST['pro_estado']);

          $consulta = "INSERT INTO programa (pro_codigo, pro_descripcion, pro_estado) VALUES ('$pro_codigo', '$pro_descripcion', '$pro_estado')";
          $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            header('location:./programa_formula.php');
            echo "Hecho";
        }else{
            echo  "No Hecho";
        }
    }
}
?>
<?php
  include("./home-director.php");
  ?>
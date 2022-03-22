<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");


if(isset($_POST['Ingresar'])){
    if(strlen($_POST['cen_codigo']) >= 1 && 
       strlen($_POST['cen_descripcion']) >=1 && 
       strlen($_POST['cen_telefono']) >= 1 && 
       strlen($_POST['cen_direccion']) >=1 && 
       strlen($_POST['ciu_id']) >=1){
        
        
        
        $usuario_id =($_POST['cen_codigo']);
        $usuario_nombre =($_POST['cen_descripcion']);
        $usuario_apellido = ($_POST['cen_telefono']);
        $usuario_login = ($_POST['cen_direccion']);
        $rol_id = ($_POST['ciu_id']);

        $conexion = mysqli_connect("localhost","root","","bd_desercion");

        $consulta = "INSERT INTO centro(cen_codigo, cen_descripcion, cen_telefono, cen_direccion, ciu_id) VALUES ('$usuario_id','$usuario_nombre','$usuario_apellido','$usuario_login','$rol_id')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            ?>
            
            <?php
            header('Location:formu_centro.php');
        }else{
            ?>
            <h3 class= "ok">  ¡no Te has registrado correctamente!</h3>
            <?php
        }
    }
}
    
?>
<?php
  include("./formu_centro.php");
  ?>
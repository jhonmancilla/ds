<?php

$conexion = mysqli_connect("localhost","root","","bd_desercion");


if(isset($_POST['enviar'])){
    if(strlen($_POST['tip_descripcion']) >= 1 && 
       strlen($_POST['tip_sigla']) >=1){
        
        
        
        $tip_descripcion =($_POST['tip_descripcion']);
        $tip_sigla =($_POST['tip_sigla']);

        $conexion = mysqli_connect("localhost","root","","bd_desercion");

        $consulta = "INSERT INTO tipo_id (tip_descripcion, tip_sigla) VALUES ('$tip_descripcion','$tip_sigla')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            ?>
            
            <?php
            header('location:listado_tip_identificacion.php');
        }else{
            ?>
            <h3 class= "ok">  ¡no Te has registrado correctamente!</h3>
            <?php
        }
    }
}
    
?>
<?php
  include("./formulario_tip_identificacion.php");
  ?>
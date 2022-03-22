<?php




if(isset($_POST['enviar'])){
    if(strlen($_POST['apr_id']) >= 1 && 
       strlen($_POST['fic_numero']) >=1 && 
       strlen($_POST['cad_codigo']) >= 1 && 
       strlen($_POST['der_fase']) >=1){
        
        
        
        $apr_id =($_POST['apr_id']);
        $fic_numero =($_POST['fic_numero']);
        $cad_codigo = ($_POST['cad_codigo']);
        $der_fase = ($_POST['der_fase']);

        $conexion = mysqli_connect("localhost", "root", "", "datab_desercion");

        $consulta = "INSERT INTO 'desercion' (apr_id, fic_numero, cad_codigo, usuario_id, der_fase) VALUES ('$apr_id','$fic_numero','$cad_codigo','$der_fase')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado){
            ?>
            <h3 class= "ok">  ¡Te has registrado correctamente!</h3>
            <?php
            header("location:formulario-de-desercion.php");
        }else{
            ?>
            <h3 class= "ok"> !UPPS erro al registrar la deswecion</h3>
            
            <?php
            header("location:formulario-de-desercion.php");
        }
    }
}
    
?>
<?php
require("../conex.php");
  ?>
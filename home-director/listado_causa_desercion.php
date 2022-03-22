<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
session_start();
if (!isset($_SESSION['usuario_clave'])){
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema desercion-director</title>
    <script src="https://kit.fontawesome.com/741877ccfb.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- JS Verificacion para eliminar un usuario -->
        <script type="">
            function ConfirmDelete(){
                var respuesta = confirm("Estas seguro que deseas eliminar este registro?");
                if (respuesta == true){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        <script type="">
            function ConfirmSesion(){
                var respuesta = confirm("Estas seguro que deseas Cerrar Sesion?");
                if (respuesta == true){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
        <!-- JS Verificacion para eliminar un usuario -->
<div class="container" style="justify-content: center;align-items: center;display: flex;height: 45vh;">

        <table class="table" width="500px" border="=1">
            <tr>
            <td>Codigo causa desercion</td>
            <td>Descripcion de la Causa</td>
            <td>Estado de Matricula</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM causa_desercion";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['cad_codigo']?></td>
            <td><?php echo $mostrar['cad_descripcion']?></td>
            <td><?php echo $mostrar['cad_mat_estado']?></td>
            <td><a href="actualizar-causa-desercion.php?id=<?php echo $mostrar['cad_codigo']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-causa-desercion.php?cad_codigo=<?php echo $mostrar['cad_codigo']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

            </tr>
            <?php
            }
            ?>


<!-- Conex BOSSTSTRAT -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /Conex BOSSTSTRAT -->

</body>
</html>

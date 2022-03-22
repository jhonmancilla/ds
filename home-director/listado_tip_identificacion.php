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
<?php
            include "formulario_tip_identificacion.php"
            ?>
<div class="container" style="justify-content: center;align-items: center;display: flex;height: 40vh;">

        <table class="table" width="500px" border="=1">
            <tr>
            <td> Descripcion identificacion</td>
            <td>Siglas Identificacion</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM tipo_id";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['tip_descripcion']?></td>
            <td><?php echo $mostrar['tip_sigla']?></td>
            <td><a href="actualizar-tipoidentificcion.php?id=<?php echo $mostrar['tip_id']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-tipoidentificcion.php?tip_id=<?php echo $mostrar['tip_id']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

            </tr>
            <?php
            }
            ?>


<!-- Conex BOSSTSTRAT -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /Conex BOSSTSTRAT -->

</body>
</html>

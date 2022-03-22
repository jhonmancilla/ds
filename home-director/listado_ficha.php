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
<div class="container" style="justify-content: center;align-items: center;display: flex;height: 45vh;">

        <table class="table" width="500px" border="=1">
            <tr>
            <td>Numero de ficha</td>
            <td>Ficha fecha inicial</td>
            <td>dersercion fecha fin </td>
            <td>Programa codigo</td>
            <td>Nombre del programa</td>
            <td>Centro codigo</td>
            <td>Nombre del centro</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            // $consulta="SELECT*FROM ficha";
            $consulta="SELECT ficha.fic_numero, ficha.fic_fecha_inicial, ficha.der_fecha_fin, programa.pro_codigo, programa.pro_descripcion, centro.cen_codigo, centro.cen_descripcion FROM ficha INNER JOIN programa on ficha.pro_codigo = programa.pro_codigo INNER JOIN centro ON ficha.cen_codigo = centro.cen_codigo";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['fic_numero']?></td>
            <td><?php echo $mostrar['fic_fecha_inicial']?></td>
            <td><?php echo $mostrar['der_fecha_fin']?></td>
            <td><?php echo $mostrar['pro_codigo']?></td>
            <td><?php echo $mostrar['pro_descripcion']?></td>
            <td><?php echo $mostrar['cen_codigo']?></td>
            <td><?php echo $mostrar['cen_descripcion']?></td>
            <td><a href="actualizar-ficha.php?id=<?php echo $mostrar['fic_numero']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-ficha.php?fic_numero=<?php echo $mostrar['fic_numero']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

            </tr>
            <?php
            }
            ?>


<!-- Conex BOSSTSTRAT -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /Conex BOSSTSTRAT -->

</body>
</html>

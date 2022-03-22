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
        <link rel="stylesheet" href="../asset/css/"/>

    <title>Sistema desercion-director</title>
    <script src="https://kit.fontawesome.com/741877ccfb.js" crossorigin="anonymous"></script>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost", "root", "", "bd_desercion");


$consulta = "SELECT desercion.apr_id, desercion.estado, desercion.der_id, ficha.fic_numero, aprendiz.apr_nombre, aprendiz.apr_apellido,causa_desercion.cad_descripcion, usuarios.usuario_nombre, usuarios.usuario_apellido from desercion INNER JOIN ficha on desercion.fic_numero = ficha.fic_numero INNER JOIN aprendiz on desercion.apr_id = aprendiz.apr_id INNER JOIN causa_desercion ON desercion.cad_codigo=causa_desercion.cad_codigo INNER JOIN usuarios on desercion.usuario_id=usuarios.usuario_id"

?>
<table>
  <tr>
    <th>Identificación del aprendiz</th>
    <th>Número de la ficha</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Causa de la deserción</th>
    <th>Solicitante</th>
    <th>Estado</th>
  </tr>
  <?php $resultado = mysqli_query($conexion, $consulta);
  while ($row = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
      <td><?php echo $row["apr_id"] ?></td>
      <td><?php echo $row["fic_numero"] ?></td>
      <td><?php echo $row["apr_nombre"] ?></td>
      <td><?php echo $row["apr_apellido"] ?></td>
      <td><?php echo $row["cad_descripcion"] ?></td>
      <td><?php echo $row["usuario_nombre"] ?> <?php echo $row['usuario_apellido'] ?></td>
      <td><?php echo $row["estado"] ?></td>
    <?php }
  mysqli_free_result($resultado); ?>
    </tr>
</table>

<!-- Conex BOSSTSTRAT -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /Conex BOSSTSTRAT -->

</body>
</html>

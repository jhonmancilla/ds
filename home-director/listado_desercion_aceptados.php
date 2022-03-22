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
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Identificación</th>
            <th scope="col">Número de ficha</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Causa de deserción</th>
            <th scope="col">Solicitante</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $dato = "SELECT desercion.apr_id, desercion.der_id, ficha.fic_numero, aprendiz.apr_nombre, aprendiz.apr_apellido,causa_desercion.cad_descripcion, usuarios.usuario_nombre, usuarios.usuario_apellido from desercion INNER JOIN ficha on desercion.fic_numero = ficha.fic_numero INNER JOIN aprendiz on desercion.apr_id = aprendiz.apr_id INNER JOIN causa_desercion ON desercion.cad_codigo=causa_desercion.cad_codigo INNER JOIN usuarios on desercion.usuario_id=usuarios.usuario_id where estado='Aceptado'";
          $result = mysqli_query($conexion, $dato);
          while ($mostrar = mysqli_fetch_array($result)) {
          ?>

            <tr>
              <td><?php echo $mostrar['apr_id'] ?></td>
              <td><?php echo $mostrar['fic_numero'] ?></td> 
              <td><?php echo $mostrar['apr_nombre'] ?></td>
              <td><?php echo $mostrar['apr_apellido'] ?></td>
              <td><?php echo $mostrar['cad_descripcion'] ?></td>
              <td><?php echo $mostrar['usuario_nombre'] ?> <?php echo $mostrar['usuario_apellido'] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody> 
      </table>
    </div


<!-- Conex BOSSTSTRAT -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /Conex BOSSTSTRAT -->

</body>
</html>

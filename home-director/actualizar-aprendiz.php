<?php 
require ('../conex.php');
require ("../navbars/menu-director.php");
?>

<!-- Extructura HTML -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actualizacion de todos</title>
    <script src="https://kit.fontawesome.com/741877ccfb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/style.atualizacion.css">

    <link rel="stylesheet" href="asset/css/style.atualizacion.css">
  </head>
  <body>
    <!-- Conetcion con Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /Conetcion con Bootstrap  -->
    <div class="container" style="justify-content: center;align-items: center;display: flex;height: 45vh;">
      <form action="validar-actualizacion-aprendiz.php" method="post">
      <table class="table table-dark table-hover">        
        <tr>
          <th>Identificación</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Telefono</th>
          <th>Ciudad</th>
          <th>Tipo de sangre</th>
          <th>Tipo de identificacion</th>
          <th>Genero</th>
          <th>Edad</th>
          <th><i class="fas fa-tools"></i></th>

          </th>
        </tr>
      <?php
      $id = $_GET['apr_id'];
      $consulta="SELECT * FROM aprendiz WHERE apr_id = '$id'";
      $result=mysqli_query($conexion,$consulta);
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
          <input type="hidden" name="apr_id" value="<?php echo $row['apr_id']?>">
          <td><input type="text" name="apr_id" value="<?php echo $row['apr_id']?>"></td>
          <td><input type="text" name="apr_nombre" value="<?php echo $row['apr_nombre']?>"></td>
          <td><input type="text" name="apr_apellido" value="<?php echo $row['apr_apellido']?>"></td>
          <td><input type="text" name="apr_telefono" value="<?php echo $row['apr_telefono']?>"></td>
          <td><input type="text" name="ciu_id" value="<?php echo $row['ciu_id']?>"></td>
          <td><input type="text" name="rh_id" value="<?php echo $row['rh_id']?>"></td>
          <td><input type="text" name="tip_id" value="<?php echo $row['tip_id']?>"></td>
          <td><input type="text" name="apr_genero" value="<?php echo $row['apr_genero']?>"></td>
          <td><input type="text" name="apr_edad" value="<?php echo $row['apr_edad']?>"></td>
          <td><input type="submit" value="Actualizar" class="btn btn-secondary" onclick="alert('La informacion sea actulizado correctamente')"></td>
        </tr>
        <?php
        }
        ?>
      </table>
      </form>
    </div>
  </body>
</html>
<?php 
require ('../conex.php');
?>

<!-- Extructura HTML -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actualizacion de todos</title>
    <script src="https://kit.fontawesome.com/741877ccfb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/style.atualizacion.css">
  </head>
  <body>
    <!-- Conetcion con Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /Conetcion con Bootstrap  -->
    <div class="container">
      <form action="validar-actualizar-ficha.php" method="post">
      <table class="table">
        <tr>
          <th>Numero de la ficha</th>
          <th>Codigo del programa</th>
          <th>Fecha de inicio</th>
          <th>Fecha de fin</th>
          <th>Codigo del centro</th>
          <th>Identificacion del aprendiz</th>
          </th>
        </tr>
      <?php
      $id = $_GET['id'];
      $consulta="SELECT * FROM ficha WHERE fic_numero = '$id'";
      $result=mysqli_query($conexion,$consulta);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
          <input type="hidden" name="id" value="<?php echo $mostrar['fic_numero']?>">
          <td><input type="text" name="fic_numero" value="<?php echo $mostrar['fic_numero']?>"></td>
          <td><input type="text" name="pro_codigo" value="<?php echo $mostrar['pro_codigo']?>"></td>
          <td><input type="text" name="fic_fecha_inicial" value="<?php echo $mostrar['fic_fecha_inicial']?>"></td>
          <td><input type="text" name="der_fecha_fin" value="<?php echo $mostrar['der_fecha_fin']?>"></td>
          <td><input type="text" name="cen_codigo" value="<?php echo $mostrar['cen_codigo']?>"></td>
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
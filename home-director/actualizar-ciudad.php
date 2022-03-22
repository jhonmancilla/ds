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
      <form action="validar-actulizacion-ciudad.php" method="post">
      <table class="table">
        <tr>
          <th>Codigo de la ciudad</th>
          <th>Descripcion de la ciudad</th>
          <th>Cantidad de habitantes</th>
          </th>
        </tr>
      <?php
      $id = $_GET['id'];
      $consulta="SELECT * FROM ciudad WHERE ciu_id = '$id'";
      $result=mysqli_query($conexion,$consulta);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
          <input type="hidden" name="id" value="<?php echo $mostrar['ciu_id']?>">
          <td><input type="text" name="ciu_id" value="<?php echo $mostrar['ciu_id']?>"></td>
          <td><input type="text" name="ciu_nombre" value="<?php echo $mostrar['ciu_nombre']?>"></td>
          <td><input type="text" name="dep_codigo" value="<?php echo $mostrar['dep_codigo']?>"></td>   
          <td><input type="text" name="ciu_canti_habitantes" value="<?php echo $mostrar['ciu_canti_habitantes']?>"></td>
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
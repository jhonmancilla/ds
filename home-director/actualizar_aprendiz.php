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
    <link rel="stylesheet" href="../asset/css/style-formularios-actualizar.css">
    <!-- Conetcion con Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /Conetcion con Bootstrap  -->
  </head>
  <body>
    <div class="container">
      <form action="validar-actulizacion-causa-desercion.php" method="post">
      <table class="table table-dark table-hover">
        <tr>
          <th>Numero de la causa</th>
          <th>Descripcion de la causa</th>
          <th>Estado</th>
          <th><i class="fas fa-tools"></i></th>
          </th>
        </tr>
      <?php
      $id = $_GET['id'];
      $consulta="SELECT * FROM aprendiz WHERE apr_id= '$id'";
      $result=mysqli_query($conexion,$consulta);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
          <input type="hidden" name="id" value="<?php echo $mostrar['cad_codigo']?>">
          <td><input type="text" name="cad_codigo" value="<?php echo $mostrar['cad_codigo']?>"></td>
          <td><input id="desc" type="text" name="cad_descripcion" value="<?php echo $mostrar['cad_descripcion']?>"></td>
          <td><input type="text" name="cad_mat_estado" value="<?php echo $mostrar['cad_mat_estado']?>"></td>
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
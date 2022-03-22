<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
  <link rel="shortcut icon" type="image/jpg" href="../favicon/sena.png">
  <title>Registrar aprendices</title>
</head>

<body>
  <!--NAVBAR-->
 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../causa/causa.php">Causa de desercion</a></li>
              <li><a class="dropdown-item" href="../centro/centro.php">Centro</a></li>
              <li><a class="dropdown-item" href="../ciudad/ciudad.php">Ciudad</a></li>
              <li><a class="dropdown-item" href="../departamentos/departamento.php">Departamento</a></li>
              <li><a class="dropdown-item" href="../programa/programa.php">Programa</a></li>
              <li><a class="dropdown-item" href="../rh/rh.php">Tipo de sangre</a></li>
              <li><a class="dropdown-item" href="../tipo_id/tipo_id.php">Tipo de identificación</a></li>
            </ul>
          </li>
      </div>

     
  <!--/NAVBAR-->
  <!--Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--/Bootstrap-->
</body>
<?php
$conexion = mysqli_connect("localhost","root","","bd_desercion");

$aprendiz = "SELECT aprendiz.apr_id, aprendiz.apr_nombre, aprendiz.apr_apellido,aprendiz.apr_telefono,ciudad.ciu_nombre, tipo_id.tip_descripcion,rh.rh_descripcion,aprendiz.apr_genero,aprendiz.apr_edad from aprendiz INNER JOIN ciudad on aprendiz.ciu_id = ciudad.ciu_id INNER JOIN rh on aprendiz.rh_id = rh.rh_id INNER JOIN tipo_id ON aprendiz.tip_id=tipo_id.tip_id";
?>

<div class="container">
  <table class="table" style="border: solid 1px;">
    <tr>
      <th>Identificación del aprendiz</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Nombre de la ciudad</th>
      <th>Tipo de doc.</th>
      <th>Tipo de sangre</th>
      <th>Genero</th>
      <th>Edad</th>
    </tr>
    <?php $resultado = mysqli_query($conexion, $aprendiz);
    while ($row = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td> <?php echo $row["apr_id"]; ?></td>
        <td> <?php echo $row["apr_nombre"]; ?></td>
        <td> <?php echo $row["apr_apellido"]; ?></td>
        <td> <?php echo $row["apr_telefono"]; ?></td>
        <td> <?php echo $row["ciu_nombre"]; ?></td>
        <td> <?php echo $row["rh_descripcion"]; ?></td>
        <td> <?php echo $row["tip_descripcion"]; ?></td>
        <td> <?php echo $row["apr_genero"]; ?></td>
        <td> <?php echo $row["apr_edad"]; ?></td>

      <?php }
    mysqli_free_result($resultado); ?></td>
      </tr>
  </table>
</div>

</body>

</html>

<!-- alerta cerrar sesion -->
<script>
  function CloseSession() {
    var respuesta = confirm("¿Quiere cerrar la sesión?");
    if (respuesta == true) {
      return true;
    } else {
      return false;
    }
  }
</script>

</html>
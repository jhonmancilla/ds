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
  <link rel="stylesheet" href="../asset/css/style-formularios-aprendiz.css"/>
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

<?php
$conexion = mysqli_connect("localhost","root","","bd_desercion");

$ciudad = mysqli_query($conexion, "SELECT ciu_id, ciu_nombre FROM ciudad");
$san = mysqli_query($conexion, "SELECT rh_id, rh_descripcion FROM rh");
$id = mysqli_query($conexion, "SELECT tip_id, tip_descripcion FROM tipo_id");
$usuari = mysqli_query($conexion, "SELECT usuario_id, usuario_nombre, usuario_apellido FROM usuarios");
?>
<div class="container" style="text-align: center;">
  <form class="form" action="registrar_aprendiz.php" method="POST">
    <p><h1>Aprendiz</h1></p>
    <div class="mg-3 col 12">
    <label for="firstName" class="first-name">Cedula</label>
    <input type="text" name="apr_id" required>
    </div>

    <div class="mg-3">
    <label for="firstName" class="first-name">Nombres</label>
    <input type="text" name="apr_nombre">
    </div>

    <div class="mg-3">
    <label for="firstName" class="first-name">Apellidos</label>
    <input type="text" name="apr_apellido">
    </div>

    <div class="mg-3">
    <label for="firstName" class="first-name">Telefono</label>
    <input type="text" name="apr_telefono">
    </div>

    <div class="mg-3">
    <label for="firstName" class="first-name">Ciudad</label>
    <select name="ciu_id">
      <?php while ($datos = mysqli_fetch_array($ciudad)) { ?>

        <option value="<?php echo $datos['ciu_id'] ?>"><?php echo $datos['ciu_nombre'] ?></option>

      <?php
      }
      ?>
    </select>
    </div>
    <div class="mg-3">
    <label for="firstName" class="first-name">Tipo de sangre</label>
    <select name="rh_id">
      <?php while ($gre = mysqli_fetch_array($san)) { ?>

        <option value="<?php echo $gre['rh_id'] ?>"><?php echo $gre['rh_descripcion'] ?></option>

      <?php
      }
      ?>
    </select>
    </div>

    <div class="mg-3">
    <label for="firstName" class="first-name">Tipo de documento</label>
    <select name="tip_id">
      <?php while ($tipo = mysqli_fetch_array($id)) { ?>

        <option value="<?php echo $tipo['tip_id'] ?>"><?php echo $tipo['tip_descripcion'] ?></option>

      <?php
      }
      ?>
    </select>
    </div>


    <div class="mg-3">
    <label for="firstName" class="first-name">Genero</label>
    <select name="apr_genero">
        <<option value="Hombre">Hombre</option>
        <<option value="Mujer">Mujer</option>
    </select>
    </div>

    <div class="mg-3">
    <label for="firstName" class="first-name">Edad</label>
    <input type="text" name="apr_edad"><br>
    </div>
    
    <input type="submit" name="enviar">
  </form>
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
</div>
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
</body>
</html>
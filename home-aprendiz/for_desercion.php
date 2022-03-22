<?php
require ("../navbars/menu-aprendiz.php");
require ('../conex.php');
?>


<?php
$conexion = mysqli_connect("localhost","root","","bd_desercion");
?>
<?php
$cad_desercion=mysqli_query($conexion,"SELECT cad_codigo, cad_descripcion FROM causa_desercion");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Deserciones</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
</head>
<body>
    
<?php

$conexion = mysqli_connect("localhost", "root", "", "bd_desercion");

$causa = mysqli_query($conexion, "SELECT cad_codigo, cad_descripcion FROM causa_desercion");

?>

<form class="form" action="registrar_desercion.php" method="POST"  autocomplete="off" >
  <br>

    <h2>Inicio de desercion</h2>
    <p>Identificacion del Aprendiz<br /><input type="text" required name="apr_id"></p>
    <p>Numero de Ficha<br /><input type="text" name="fic_numero"></p>
    </select>

    <p>Causa de la deserción</p>
    <select required name="cad_codigo">
      <?php while ($deser = mysqli_fetch_array($causa)) { ?>

        <option value="<?php echo $deser['cad_codigo'] ?>"><?php echo $deser['cad_descripcion'] ?></option>

      <?php
      }
      ?>
    </select>
    <p>Confirmar numero de identificacion<br /><input type="text" required name="usuario_id"></p>
    <select required name="der_fase">
        <option value="Analisis">Analisis</option>
        <option value="Planificacion">Planificacion</option>
        <option value="Ejecucion">Ejecucion</option>
        <option value="Evaluacion">Evaluacion</option>
    </select></br></br>
    <input type="submit" value="Ingresar" name="Ingresar">
  </form>
</div>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
?>


<?php
include '../conex.php';
$ciudad=mysqli_query($conexion,"SELECT ciu_id, ciu_nombre FROM ciudad");
$san=mysqli_query($conexion,"SELECT rh_id FROM rh");
$id=mysqli_query($conexion, "SELECT tip_id, tip_descripcion FROM tipo_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="continer" style="text-align: center;">
    <form action="validar-crear-aprendiz.php" method="POST" autocomplete="off">
        
        <h1>Registrar Aprendiz</h1>
        <p>Cedula</p>
        <input type="text" required name="apr_id">
        <p>Nombres</p>
        <input type="text" required name="apr_nombre">
        <p>Apellidos</p>
        <input type="text" required name="apr_apellido">
        <p>Telefono</p>
        <input type="text" required name="apr_telefono">

        <p>Ciudad</p>
            <select required name="ciu_id" > 
            <?php while($ciu = mysqli_fetch_array($ciudad)){ ?>

            <option value="<?php echo $ciu['ciu_id'] ?>"><?php echo $ciu['ciu_nombre'] ?></option>

            <?php
            }
            ?>
            </select>

            <p>Tipo de documento</p>
            <select required name="tip_id">
            <?php while($tipo = mysqli_fetch_array($id)){ ?>

            <option value="<?php echo $tipo['tip_id'] ?>"><?php echo $tipo['tip_descripcion'] ?></option>

            <?php
            }
            ?>
            </select>
        
        <p>Tipo de sangre</p>
            <select required name="rh_id">
            <?php while($gre = mysqli_fetch_array($san)){ ?>

            <option value="rh_id"><?php echo $gre['rh_id'] ?></option>

            <?php
            }
            ?>
            </select>    

        <p>Genero</p>
        <select required name="apr_genero">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
        <p>Edad</p>
        <input type="text" required name="apr_edad"><br>
        <input type="submit" required name="enviar">
        
    </form>

</div>
     
</body>
</html>
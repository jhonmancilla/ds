<?php
require ("../navbars/menu-director.php");
require ('../conex.php');



$ficha=mysqli_query($conexion,"SELECT fic_numero FROM ficha");
$aprendiz=mysqli_query($conexion,"SELECT apr_id, apr_nombre, apr_apellido FROM aprendiz");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
    <title>Matriculación</title>
</head>
<body>
    
<form class="form" action="registrarmatri.php" method="POST"  autocomplete="off" >
    <h1>Matricular Aprendiz</h1>
    <p>Numero de la ficha<br/>

    <select name="fic_numero" required>
        <?php while($fic = mysqli_fetch_array($ficha)){ ?>

            <option value="<?php echo $fic['fic_numero'] ?>"><?php echo $fic['fic_numero'] ?></option>

            <?php
            }
            ?>
        </select>
    <p>Identificacion del aprendiz<br/>
    <select name="apr_id" required>
        <?php while($apr = mysqli_fetch_array($aprendiz)){ ?>

            <option value="<?php echo $apr['apr_id'] ?>"><?php echo $apr['apr_nombre'] ?> <?php echo $apr['apr_apellido'] ?></option>

            <?php
            }
            ?>
        </select>
    <p>Estado de matricula<br/>
    <select name="mat_estado" required>
            <option value="Activa">Activa</option>
            <option value="Cancelada">Cancelada</option>
            <option value="Aplazada">Aplazada</option>
        </select></br></br>
    <input type="submit" value="enviar" name="enviar">
</form>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
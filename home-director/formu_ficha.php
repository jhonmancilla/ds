<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
?>


<?php
$ficha=mysqli_query($conexion,"SELECT cen_codigo, cen_descripcion FROM centro");
$pro_codigo=mysqli_query($conexion,"SELECT pro_codigo, pro_descripcion FROM programa");
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
    
<div class="container">
<form class="form" action="registrar-ficha.php" method="POST"  autocomplete="off">
        <h2>Registrar ficha</h2>
            <p>Número de la ficha:</p>
        <input type="text" placeholder="Número de la ficha" required name="fic_numero"/>
        <p>Codigo del programa:</p>
        <select name="pro_codigo" required>
        <?php while($pro = mysqli_fetch_array($pro_codigo)){ ?>

            <option value="<?php echo $pro['pro_codigo'] ?>"><?php echo $pro['pro_descripcion'] ?></option>

            <?php
            }
            ?>
        </select>
            <p>Fecha inicial:</p>
        <input type="text" placeholder="Fecha inicial" required name="fic_fecha_inicial"/>
            <p>Fecha fin:</p>
        <input type="text" placeholder="Fecha fin" required name="der_fecha_fin"/>
            <p>Codigo del centro:</p>
        <select name="cen_codigo" required>
        <?php while($fic = mysqli_fetch_array($ficha)){ ?>

            <option value="<?php echo $fic['cen_codigo'] ?>"><?php echo $fic['cen_descripcion'] ?></option>

            <?php
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="enviar" name="enviar"><br>
    </form>
</div>
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
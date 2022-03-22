


<?php
require ('../conex.php');
$departamento=mysqli_query($conexion,"SELECT dep_codigo, dep_nombre FROM departamento");
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
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
</head>
<body>
<div class="continer" style="text-align: center;">
    <form class="form" action="registrar_ciudad.php" method="POST">
        <h2 style="text-align: center;"> Ingresar Ciudad</h2>

        <label>Numero de la ciudad</label>
        <input type="number" name="ciu_id" placeholder="N°">
        
        <label>Nombre de la ciudad</label>
        <input type="text" name="ciu_nombre" placeholder="Nombre de la ciudad">

        <label>Departamento</label></br>
        <select name="dep_codigo">
        <?php while($dep = mysqli_fetch_array($departamento)){ ?>

        <option value="<?php echo $dep['dep_codigo'] ?>"><?php echo $dep['dep_nombre'] ?></option>

        <?php
        }
        ?>
        </select></br>

        <label>Numero de habitantes</label>
        <input type="number" name="ciu_canti_habitantes" placeholder="N°">

        <input type="submit" name="enviar">
    </form>
</div>
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
</body>
</html>
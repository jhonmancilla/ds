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
    <link rel="stylesheet" href="../asset/css/style-formularios-aprendiz.css"/>
    <title>Matriculación</title>
</head>
<body>
    <div class="continer" style="text-align: center;">
<h2>Registrar ficha</h2>
<form class="form" action="registrar_ficha.php" method="POST">
            <p>Número de la ficha:</p>
        <input type="text" placeholder="Número de la ficha" name="fic_numero"/>
        <p>Codigo del programa:</p>
        <input type="text" placeholder="codigo" name="pro_codigo"/>
            <p>Fecha inicial:</p>
        <input type="text" placeholder="Fecha inicial" name="fic_fecha_inicial"/>
            <p>Fecha fin:</p>
        <input type="text" placeholder="Fecha fin" name="der_fecha_fin"/>
            <p>Codigo del centro:</p>
        <input type="text" placeholder="codigo del centro" name="cen_codigo"/>
        <br>
        <input type="submit" value="enviar" name="enviar">        <br>
    </form>
</div>




<div>
        <table class="table" width="500px" border="=1">
            <tr>
            <td>Numero de la ficha</td>
            <td>Codigo del programa</td>
            <td>Fecha de inicio</td>
            <td>Fecha de fin</td>
            <td>Codigo del centro</td>
            <td>Identificacion del aprendiz</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM ficha";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['fic_numero']?></td>
            <td><?php echo $mostrar['pro_codigo']?></td>
            <td><?php echo $mostrar['fic_fecha_inicial']?></td>
            <td><?php echo $mostrar['der_fecha_fin']?></td>
            <td><?php echo $mostrar['cen_codigo']?></td>
            <td><?php echo $mostrar['apr_id']?></td>
            <td><a href="actualizar-ficha.php?id=<?php echo $mostrar['fic_numero']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-ficha.php?id=<?php echo $mostrar['fic_numero']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

            </tr>
            <?php
            }
            ?>
    </div>
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
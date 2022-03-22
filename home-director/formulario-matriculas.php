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
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
    <title>Matriculación</title>
</head>
<body>
<div class="continer" style="text-align: center;">
    <form class="form" action="registrarmatri.php" method="POST">
        <h1>Matricular Aprendiz</h1>
        <p>Numero de la ficha<br/><input type="text"  name="fic_numero"></p>
        <p>Identificacion del aprendiz<br/><input type="text"  name="apr_id"></p>
        <p>Estado de matricula<br/><input type="text"  name="mat_estado"></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</div></br>

<div>
        <table class="table" width="500px" border="=1">
            <tr>
            <td>Codigo de la matricula</td>
            <td>Estado de la matricula</td>
            <td>Identificacion del aprendiz</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM matricula";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['mat_codigo']?></td>
            <td><?php echo $mostrar['mat_estado']?></td>
            <td><?php echo $mostrar['apr_id']?></td>
            <td><a href="actualizar-matricula.php?id=<?php echo $mostrar['mat_codigo']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-matricula.php?id=<?php echo $mostrar['mat_codigo']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

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
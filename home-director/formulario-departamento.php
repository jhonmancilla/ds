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
    <title>Deserciones</title>
</head>
<body>

<div class="continer" style="text-align: center;">
<form class="form" action="./validar-departamento.php" method="POST">
    <h1>Inicio de desercion</h1>
    <p>Codigo del departamento<br/><input type="text"  name="dep_codigo"></p>
    <p>Nombre del departamento<br/><input type="text" name="dep_nombre"></p>
    <input type="submit" name="enviar">
</form>
</div>


<div>
        <table class="table" width="500px" border="=1">
            <tr>
            <td>Codigo del departamento</td>
            <td>Nombre del departamento</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM departamento";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['dep_codigo']?></td>
            <td><?php echo $mostrar['dep_nombre']?></td>
            <td><a href="actualizar-departamento.php?id=<?php echo $mostrar['dep_codigo']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-departamento.php?id=<?php echo $mostrar['dep_codigo']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

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
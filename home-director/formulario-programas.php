<?php 
require ("../navbars/menu-director.php");
require ('../conex.php');

$aprendiz=mysqli_query($conexion,"SELECT apr_id FROM aprendiz");
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
<h2>Registrar programa</h2>
<form class="form" action="registrar-programa.php" method="POST">
    <label>codigo del programa</label></br>
    <input type="number" placeholder="Codigo del programa" name="pro_codigo"/></br>

    <label>Descripcion del programa</label></br>
    <input type="text" name="pro_descripcion" placeholder="Descripcion"></br>

    <label>Estado del programa</label></br>
    <select  name="pro_estado">
        <option value="Activo">Activo</option>
        <option value="Congelado">Congelado</option>
    </select ></br>

    <label>ID aprendiz</label></br>
    <select name="apr_id" >
            <?php while($apr = mysqli_fetch_array($aprendiz)){ ?>

            <option value="<?php echo $apr['apr_id'] ?>"><?php echo $apr['apr_id'] ?></option>

            <?php
            }
            ?>
            </select>
        </br>
    <button name="enviar">enviar</button>
</form>
</div></br>


<div>
        <table class="table" width="500px" border="=1">
            <tr>
            <td>Codigo del programa</td>
            <td>Descripcion del programa</td>
            <td>Estado del programa</td>
            <td>Identificacion de aprendicez</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM programa";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['pro_codigo']?></td>
            <td><?php echo $mostrar['pro_descripcion']?></td>
            <td><?php echo $mostrar['pro_estado']?></td>
            <td><?php echo $mostrar['apr_id']?></td>
            <td><a href="actualizar-programa.php?id=<?php echo $mostrar['pro_codigo']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-programa.php?id=<?php echo $mostrar['pro_codigo']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

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
<?php
include("../conex.php");
require("../navbars/menu-director.php")
?>
<?php
$ciudad=mysqli_query($conexion,"SELECT ciu_id FROM ciudad");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Deserciones</title>
</head>
<body>

<div class="continer" style="text-align: center;">
<table class="table" width="500px" border="=1">
            <tr>
            <td>Codigo del centro</td>
            <td>Descripcion del centro</td>
            <td>Telefono</td>
            <td>Direccion id</td>
            <td>Id_ de Ciudad</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM centro";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['cen_codigo']?></td>
            <td><?php echo $mostrar['cen_descripcion']?></td>
            <td><?php echo $mostrar['cen_telefono']?></td>
            <td><?php echo $mostrar['cen_direccion']?></td>
            <td><?php echo $mostrar['ciu_id']?></td>
            <td><a href="actualizar-centro.php?id=<?php echo $mostrar['cen_codigo']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-centro.php?id=<?php echo $mostrar['cen_codigo']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

            </tr>
            <?php
            }
            ?>

</div>

<div class="continer" style="text-align: center;">
<section class="from-registro">    
<form action="./registrar-centro.php" method="POST">
    
    <h1>Inicio de desercion</h1>
    <p>Codigo centro<br/><input type="text"  name="cen_codigo"></p>
    <p>Nombre centro<br/><input type="text" name="cen_descripcion"></p>
    <p>Centro telefono<br/><input type="text"  name="cen_telefono"></p>
    <p>Centro direccion<br/><input type="text"  name="cen_direccion"></p>
    <p>Ciudad</p>
            <select name="ciu_id" >
            <?php while($datos = mysqli_fetch_array($ciudad)){ ?>

            <option><?php echo $datos['ciu_id'] ?></option>

            <?php
            }
            ?>
            </select>
    <input type="submit" value="Ingresar" name="Ingresar">
</form>
</div></br>
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
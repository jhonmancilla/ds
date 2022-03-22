

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
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
    <title>Deserciones</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /BOOTSTRAP -->
</head>
<body>
<div class="continer" style="text-align: center; display: flex; height: 40vh;">

<div class="container">
    <form class="form" action="registrar_rh.php" method="POST"  autocomplete="off" >
        
        <h1 >Descripcion tipo de sangre</h1>
        <input type="text"  name="rh_descripcion"></p>
        <input type="submit" name="enviar">
    </form>
</div> 
</body>
</html>
<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
?>



<?php
$conexion = mysqli_connect("localhost","root","","bd_desercion");
?>
<?php
$ciudad=mysqli_query($conexion,"SELECT ciu_id, ciu_nombre FROM ciudad");
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

<div class="container">
    <form class="form" action="registrar_centro.php" method="POST">
        
        <h1>Centros Formativos</h1>
        <label>Codigo centro</label>
        <input type="text" required name="cen_codigo">
        <label>Nombre centro</label>
        <input type="text" required name="cen_descripcion">
        <label>Centro telefono</label>
        <input type="text" required name="cen_telefono">
        <label>Centro direccion</label>
        <input type="text" required name="cen_direccion">
        
        <p>Ciudad</p>
                <select name="ciu_id" >
                <?php while($ciu = mysqli_fetch_array($ciudad)){ ?>

                <option value="<?php echo $ciu['ciu_id'] ?>"><?php echo $ciu['ciu_nombre'] ?></option>

                <?php
                }
                ?>
                </select></br></br>
        <input type="submit" value="Ingresar" name="Ingresar">
    </form>
</div>  
<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>

<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
session_start();
if (!isset($_SESSION['usuario_clave'])){
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema desercion-director</title>
    <script src="https://kit.fontawesome.com/741877ccfb.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
            include "formulario-ciudad.php"
            ?>
<div class="container" style="justify-content: center;align-items: center;display: flex;height: 65vh;">

        <table class="table" width="500px" border="=1">
            <tr>
            <td>Codigo de la Ciudad</td>
            <td>Nombre de la Ciudad</td>
            <td>Codigo del Departamento</td>
            <td>Numero de habitantes</td>
            <td>Editar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM ciudad";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['ciu_id']?></td>
            <td><?php echo $mostrar['ciu_nombre']?></td>
            <td><?php echo $mostrar['dep_codigo']?></td>
            <td><?php echo $mostrar['ciu_canti_habitantes']?></td>
            <td><a href="actualizar-ciudad.php?id=<?php echo $mostrar['ciu_id']?>"><i class="far fa-edit"></i></a></td>

            </tr>
            <?php
            }
            ?>

</body>
  <!--Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--/Bootstrap-->
</html>

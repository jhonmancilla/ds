<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
?>


<?php
require ('../conex.php');
$aprendiz=mysqli_query($conexion,"SELECT apr_id FROM aprendiz");
$ficha=mysqli_query($conexion,"SELECT fic_numero FROM ficha");
$causa=mysqli_query($conexion, "SELECT cad_codigo FROM causa_desercion");
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
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
</head>
<body>
    <div class="continer" style="text-align: center;">
    
    <form class="form" action="registrar-desercion.php" method="POST">
    <h2 style="text-align: right;"> Crear desercion</h2>
            <label>Id aprendiz</label>
            <select name="apr_id" >
            <?php while($apr = mysqli_fetch_array($aprendiz)){ ?>

            <option value="<?php echo $apr['apr_id'] ?>"><?php echo $apr['apr_id'] ?></option>

            <?php
            }
            ?>
            </select>

            <p>Numero de la ficha</p>
            <select name="fic_numero">
            <?php while($fic = mysqli_fetch_array($ficha)){ ?>

            <option value="<?php echo $fic['fic_numero'] ?>"><?php echo $fic['fic_numero'] ?></option>

            <?php
            }
            ?>
            </select>
        
        <p>Coigo de la deserciom</p>
            <select name="cad_codigo">
            <?php while($cad = mysqli_fetch_array($causa)){ ?>

            <option value="<?php echo $cad['cad_codigo'] ?>"><?php echo $cad['cad_codigo'] ?></option>

            <?php
            }
            ?>
            </select>    

        <p>Fase de la desercion</p>
        <input type="text" name="der_fase">
        <input type="submit" name="enviar">
        
    </form>
    </div></br>


    <div>
        <table class="table" width="500px" border="=1">
            <tr>
            <td>N°</td>
            <td>Fecha de la desercion</td>
            <td>Id del aprendiz</td>
            <td>Numero de la ficha</td>
            <td>Codigo de la causa</td>
            <td>Fase de la desercion</td>
            <td>Editar</td>
            <td>Eliminar</td>
            </tr>

            <?php
            $consulta="SELECT*FROM desercion";
            $resultado=mysqli_query($conexion,$consulta);
            
            while($mostrar=mysqli_fetch_array($resultado)){
            ?>

            <tr>
            <td><?php echo $mostrar['der_id']?></td>
            <td><?php echo $mostrar['der_fecha']?></td>
            <td><?php echo $mostrar['apr_id']?></td>
            <td><?php echo $mostrar['fic_numero']?></td>
            <td><?php echo $mostrar['cad_codigo']?></td>
            <td><?php echo $mostrar['der_fase']?></td>
            <td><a href="actualizar-deserciones.php?id=<?php echo $mostrar['der_id']?>"><i class="far fa-edit"></i></a></td>
            <td><a href="eliminar-deserciones.php?id=<?php echo $mostrar['der_id']?>"><i class="fas fa-trash-alt" onclick="return ConfirmDelete()"></i></a></td>

            </tr>
            <?php
            }
            ?>
    </div>
     
</body>
</html>
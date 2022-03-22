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
    
<form class="form" action="validar_retiros.php" method="POST">
    <h1>Inicio de desercion</h1>
    <p>Codigo de la causa<br/><input type="text" required  name="cad_codigo"></p>
    <p>Descripcion de la causa<br/><textarea type="text" required name="cad_descripcion"></textarea></p>
    <p>Estado de matricula<br/><select type="text" name="cad_mat_estado">
    <option value="Activa">Activa</option>
    <option value="Aplazada">Aplazada</option>
    <option value="Cancelada">Cancelada</option>
    </select></p>
    <input type="submit" value="Enviar" name="Enviar">
</form>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>

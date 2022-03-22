

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
    <title>Departamento</title>
</head>
<body>

<div class="continer" style="text-align: center;">
<form class="form"  action="registrar_departamento.php" method="POST"  autocomplete="off" >
    <h1 style="text-align: center;">Ingresar Departamento</h1>
    <p>Codigo del departamento<br/><input type="text" required name="dep_codigo"></p>
    <p>Nombre del departamento<br/><input type="text" required name="dep_nombre"></p>
    <input type="submit" name="enviar">
</form>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
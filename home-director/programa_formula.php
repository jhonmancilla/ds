
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
    
<div class="container">

    <form class="form" action="registrar_programa.php" method="POST" autocomplete="off">
        <h2>Registrar programa</h2>
            <p>Codigo del programa:</p>
        <input type="text" placeholder="Codigo" name="pro_codigo"/>
            <p>Descripción del programa:</p>
        <input type="text" placeholder="Descripción" name="pro_descripcion"/>
            <p>Estado del programa:</p>
        <input type="text" placeholder="Estado" name="pro_estado"/>
        <br>
        <input type="submit" name="enviar">
        <br>
    </form>
</div>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- /BOOTSTRAP -->
    
</body>
</html>
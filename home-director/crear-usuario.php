<?php
require ("../navbars/menu-director.php");
require ('../conex.php');
?>
<!DOCTYPE html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="../asset/css/style-formularios.css"/>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
</head>
<body>
<div class="container">
    <form class="form" method="POST">
        <h1>Formulario Usuario</h1>
        <label>Identificacion del usuario</label> 
        <input type="text" name="usuario_id"/>

        <label>Nombre del usuario</label>
        <input type="text" name="usuario_nombre"/>

        <label>Apellido del usuario</label>
        <input type="text" name="usuario_apellido"/>

        <label>Usuario login</label>
        <input type="text" name="usuario_login"/>

        <label>Clave del usuario</label>
        <input type="password" name="usuario_clave"/>

        <label>Rol</label><br>
        <select name="rol_id">
            <option value="1">Aprendiz</option>
            <option value="2">Instructor</option>
            <option value="3">Director</option>
        </select></br></br>
        <input type="submit" name="registro"/>
    </form>
</div>


</body>
</html>
<?php
  include ("validar_crear_usuario.php");
?>


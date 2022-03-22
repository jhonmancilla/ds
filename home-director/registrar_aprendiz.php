<?php
$conexion = mysqli_connect('localhost', 'root', '', 'bd_desercion');

 if (isset($_POST['enviar'])){
    if (strlen($_POST['apr_id']) >= 1 &&
    strlen($_POST['apr_nombre']) >= 1 &&
    strlen($_POST['apr_apellido']) >= 1 &&
    strlen($_POST['apr_telefono']) >= 1 &&
    strlen($_POST['ciu_id']) >= 1 &&
    strlen($_POST['tip_id']) >= 1 &&
    strlen($_POST['rh_id']) >= 1 &&
    strlen($_POST['apr_genero']) >= 1 &&
    strlen($_POST['apr_edad']) >= 1) {

        $apr_id = ($_POST['apr_id']);
        $apr_nombre = ($_POST['apr_nombre']);
        $apr_apellido = ($_POST['apr_apellido']);
        $apr_telefono = ($_POST['apr_telefono']);
        $ciu_id = ($_POST['ciu_id']);
        $tii_id = ($_POST['tip_id']);
        $rh_id = ($_POST['rh_id']);
        $apr_genero = ($_POST['apr_genero']);
        $apr_edad = ($_POST['apr_edad']);
        
        $consultausuario = "INSERT INTO usuarios(usuario_id, usuario_nombre, usuario_apellido, usuario_login, usuario_clave, rol_id) 
        VALUES ('$apr_id', '$apr_nombre', '$apr_apellido', '$apr_nombre',  $apr_id, 1)";
        $resultadousuario = mysqli_query($conexion,$consultausuario);


        $consulta = "INSERT INTO aprendiz(apr_id, apr_nombre, apr_apellido, apr_telefono, ciu_id, tip_id, rh_id, apr_genero, apr_edad, usuario_id) VALUES 
        ('$apr_id','$apr_nombre','$apr_apellido','$apr_telefono', '$ciu_id', '$tii_id', '$rh_id', '$apr_genero', '$apr_edad', '$apr_id')";


        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            header('location:formulario_aprendiz.php');
            echo "registrado";
        } else { 
            echo"no se registro";
           
        
    }
 }
}
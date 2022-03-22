<!DOCTYPE html>
<head>
<title>Registro</title>
<link rel ="stylesheet" href="estilo.css">
<link rel="shortcut icon" type="image/jpg" href="./logosena.jpg"/>
</head>
<body>
<div class="container">
    <div class="position-absolute top-50 start-50 translate-middle">
      <form action="#" method="post">
        <div class="mb-5 text-center">
          <img src="https://www.sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="logoSena" class="logo">
        </div>
        <div class="mb-3"> 
<html>

<form  action="./registrar_usuario.php"  method="POST">
<br>    
<br>
<table class="table" width="200" align="center">

    <h1>REGISTRO</h1> 
    <tr>
        <td><input type="text" placeholder= "Identificacion" name="usuario_id"/></td>
    </tr>
    <tr>
        <td><input type="text" placeholder= "Nombre" name="usuario_nombre"/></td>
    </tr>
    <tr>
        <td><input type="text" placeholder= "Apellidos" name="usuario_apellido"/></td>
    </tr>
    <tr>
        <td><input type="text" placeholder= "Usuario login" name="usuario_login"/></td>
    </tr>
    <tr>
        <td><input type="password" placeholder= "Contrasena" name="usuario_clave"/></td>
    </tr>
   <td>

    </td>
    <tr>
      <td><input type="submit" name="registro"/></td>
    </tr>
    <tr>
      <td></td>
      <td><p>¿Ya estas registrado? <a placeholder= "Iniciar sesion" href="login.php"> Iniciar sesion</a></p></td>
    </tr>
    
  </table>
</form>

</body>
</html>

<?php
  include ("registrar.php");

  ?>


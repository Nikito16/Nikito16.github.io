<?php
require "./Layout/header.php";
require_once 'configuracion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor-login">
        <h1>Registro de Usuario</h1>
        <form action="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=save" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <br>
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <br>
            <div class="boton-crud">
                <input type="submit" value="Registrar">
            </div>
        </form>
    </div>
</body>
</html>
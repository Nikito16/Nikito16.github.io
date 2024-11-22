<?php
require "./Layout/header.php";
require_once 'configuracion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor-login">
        <h1>Editar Usuario</h1>
        <form action="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=update" method="POST">
            <input type="hidden" name="id" value="<?= $usuarioData->id ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?= $usuarioData->nombre ?>" required>
            <br>
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" value="<?= $usuarioData->apellidos ?>" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $usuarioData->email ?>" required>
            <br>
            <div class="boton-crud">
                <input type="submit" value="Actualizar">
            </div>
        </form>
    </div>
    <?php if (isset($_SESSION['update'])): ?>
        <p><?= $_SESSION['update'] == 'complete' ? 'Actualización exitosa' : 'Error al actualizar' ?></p>
        <?php unset($_SESSION['update']); ?>
    <?php endif; ?>
</body>
</html>


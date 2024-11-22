<?php
require "./Layout/header.php";
require_once 'configuracion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h5>Lista de Usuarios</h5>
    <a href="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=logout" class="enlaces">Cerrar Sesión</a>
    <br>
    <a href="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=registro" class="enlaces">Registrar Nuevo Usuario</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($usuario = $usuarios->fetch_object()): ?>
                <tr>
                    <td><?= $usuario->id ?></td>
                    <td><?= $usuario->nombre ?></td>
                    <td><?= $usuario->apellidos ?></td>
                    <td><?= $usuario->email ?></td>
                    <td>
                        <a href="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=edit&id=<?= $usuario->id ?>" class="enlaces">Editar</a>
                        <a href="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=delete&id=<?= $usuario->id ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?');" class="enlaces">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>



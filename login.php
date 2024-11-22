<?php
require "./Layout/header.php";
require_once 'configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <div class="contenedor-login">
        <section id="login">
            <h4>Inicio de Sesión</h4>
            <form action="<?= base_url ?>indexCRUD.php?controlador=UsuarioController&accion=login" method="POST">
                <div class="datos-form">
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="contraseña">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" minlength="6" placeholder="Contraseña" required>
                    </div>
                    <div class="boton-formulario">
                        <button type="submit" class="boton-inicio-seccion">Iniciar Sesión</button>
                    </div>
                    <div class="login_ref">
                        <p>¿No tienes una cuenta?</p>
                        <a href="<?= base_url ?>registro_login.php">Crea la tuya aqui</a>
                    </div>

                </div>
            </form>
        </section>
    </div>
    <?php if (isset($_SESSION['error_login'])): ?>
        <p><?= $_SESSION['error_login'] ?></p>
        <?php unset($_SESSION['error_login']); ?>
    <?php endif; ?>

</body>
</html>

<?php
require_once 'configuracion.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <!-- Iconos -->
        <script src="https://kit.fontawesome.com/5c2a728a53.js"
        crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="style.css">  
        <link rel="icon" href="imgs/logo.jpeg" type="image/x-icon">    
        <title>Portafolio Web</title>

    </head>

    <body>
        <header>
            <div class="logo-container">
                <img src=".\imgs\logo.jpeg" alt="" class="logo-imagen">
                <h2 class="logo-texto">PortafolioWeb</h2>
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="mostrar-menu">
                &#8801
            </label>
            <nav class="menu">
                <a href="<?= base_url ?>#check">Inicio</a>
                <a href="<?= base_url ?>#personas">Sobre Nosotros</a>
                <a href="<?= base_url ?>#contacto">Contacto</a>
                <a href="<?= base_url ?>login.php">Panel de control</a>
                <label for="check" class="esconder-menu">
                    &#215
                </label>
            </nav>
        </header>

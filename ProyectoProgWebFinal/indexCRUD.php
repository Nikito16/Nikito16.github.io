<?php
require_once 'configuracion.php';
require_once 'Controllers/UsuarioController.php';

$nombreControlador = $_GET['controlador'] ?? controlador_por_defecto;
$nombreAccion = $_GET['accion'] ?? accion_por_defecto;

if (class_exists($nombreControlador)) {
    $controlador = new $nombreControlador();

    if (method_exists($controlador, $nombreAccion)) {
        $controlador->$nombreAccion();
    } else {
        echo "Error: La acción '$nombreAccion' no existe en el controlador.";
    }
} else {
    echo "Error: El controlador '$nombreControlador' no existe.";
}

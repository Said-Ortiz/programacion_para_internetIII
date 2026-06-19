<?php
require_once __DIR__ . '/config/conexion.php';
require_once __DIR__ . '/controladores/EmpleadoController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'guardar':
        EmpleadoController::registrar($conexion, $_POST['nombre'], $_POST['puesto'], $_POST['salario']);
        break;

    case 'actualizar':
        EmpleadoController::actualizar($conexion, $_POST['id'], $_POST['nombre'], $_POST['puesto'], $_POST['salario']);
        header('Location: index.php');
        exit;

    case 'eliminar':
        EmpleadoController::eliminar($conexion, $_GET['id']);
        break;

    case 'crear':
        include 'vistas/modulos/sidebar.php';
        include 'vistas/crear.php';
        include 'vistas/modulos/footer.php';
        break;

    case 'editar':
        include 'vistas/modulos/sidebar.php';
        include 'vistas/editar.php';
        include 'vistas/modulos/footer.php';
        break;

    default:
        include 'vistas/modulos/sidebar.php';
        include 'vistas/inicio.php';
        include 'vistas/modulos/footer.php';
        break;
}

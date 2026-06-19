<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 250px; min-height: 100vh;">
        <h5 class="mb-4">
            <i class="bi bi-buildings-fill"></i> TECH SOLUTIONS 
        </h5>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-white">
                    <i class="bi bi-list-ul"></i> Listar Empleados
                </a>
            </li>
            <li>
                <a href="index.php?action=crear" class="nav-link text-white">
                    <i class="bi bi-person-plus-fill"></i> Nuevo Empleado
                </a>
            </li>
        </ul>
        <hr>
        <span class="text-secondary small">TechSolutions &copy; <?php echo date('Y'); ?></span>
    </div>
    <div class="flex-grow-1">

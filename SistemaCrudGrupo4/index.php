<?php
require_once __DIR__ . "/controladores/EmpleadoController.php";

$lista_empleados = EmpleadoController::listar($conexion);


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-8">
        <div class="card shadow-sm p-4">
            <h4 class="card-tittle mb-3">
                Alumnos Registrados
            </h4>

            <table class="table table-striped table-sm table-hover aling-middle">
                <thead class="table-dark">
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Salario</th>
                        <th>Ingreso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($lista_empleados)): ?>
                        <?php foreach ($lista_empleados as $alumno): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($alumno['id']); ?></td>
                                <td><?php echo htmlspecialchars($alumno['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($alumno['puesto']); ?></td>
                                <td><?php echo htmlspecialchars($alumno['salario']); ?></td>
                                <td><?php echo htmlspecialchars($alumno['fecha_registro'] ?? ''); ?></td>
                                <td>
                                    <a href="index.php?editar=<?php echo $alumno['id'] ?>" class="btn btn-sm btn-warning text-white">
                                        Editar
                                    </a>
                                    <a href="index.php?eliminar=<?php echo $alumno['id'] ?>" class="btn btn-sm btn-danger text-white" onclick="return confirm('Desea eliminar este alumno?')">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted">No hay alumnos registrados.</td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
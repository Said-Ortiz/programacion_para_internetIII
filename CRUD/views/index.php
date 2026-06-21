<?php
    require_once '../controllers/controlador.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD ALUMNOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="bg-light">    
    <div class="container mt-5">
        <h1 class="text-center mb-4">Control de Alumnos</h1>
        <?php echo $mensaje; ?>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4">
                    <h4 class="card-title mb-3">Nuevo Alumno</h4>

                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre Completo:</label>
                            <input type="text" name="nombre" class="form-control" required placeholder="Ej. Oscar Martinez">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo Electronico:</label>
                            <input type="email" name="correo" class="form-control" required placeholder="Ej. oscar@gmail.com">
                        </div>
                        <button type="submit" name="btn_registrar" class="btn btn-success w-100">Guardar Alumno</button>
                    </form>

                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow-sm p-4">
                    <h4 class="card-title mb-3">Alumnos Registrados</h4>
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Fecha Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($lista_alumnos) > 0): ?>
                                <?php foreach ($lista_alumnos as $alumno): ?>
                                    <tr>
                                        <td><strong><?php echo $alumno['id']; ?></strong></td>
                                        <td><?php echo htmlspecialchars($alumno['nombre']); ?></td>
                                        <td><?php echo htmlspecialchars($alumno['correo']); ?></td>
                                        <td><?php echo $alumno['fecha_registro']; ?></td>
                                    </tr>
                                <?php endforeach; ?>   
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No hay alumnos registrados aun.</td>
                                </tr>  
                            <?php endif; ?>  
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</body>
</html>
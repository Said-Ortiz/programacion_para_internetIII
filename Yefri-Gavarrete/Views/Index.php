<?php
    require_once '../Controllers/controlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-3">Control de Alumnos</h1>

        <?php echo $mensaje; ?>

        <div class="row">
            <div class="col-md-4 mb-4 input-icon-group">
                <div class="card shadow-sm p-4">
                    <h4 class="card-title mb-3 fw-bold">Nuevo Alumno</h4>

                    <form action="Index.php" method= "POST">
                    <div class="mb-3">
                        <label for="" class="form-label fw-semibold">Nombre Completo:</label>
                        <input type="text" name= "nombre"class="form-control" required placeholder="Ej: Yefri Gavarrete">

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label fw-semibold">Correo Electronico: </label>
                        <input type="email" name="correo" class="form-control" required placeholder="Ej: yefri124@gmail.com">
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label fw-semibold">Fecha Registro: </label>
                        <input type="date" name="fecha_registro" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-semibold">Telefono: </label>
                        <input type="text" name="telefono" class="form-control" required placeholder="Ej: 98569585"/>
                    </div>

                    <button type="submit" name="btn_registrar" class="btn btn-outline-primary w-100" > Guardar Alumno</button>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
              <div class="card shadow-sm p-4">
                <h4 class="card-title mb-3"> Alumnos Registrados: </h4>
                <table class="table table-striped table-hover table-bordered table-primary align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha Registro</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($lista_alumnos) > 0): ?>
                            <?php foreach($lista_alumnos as $alumnos): ?>
                                <tr>
                                    <td><strong><?php  echo $alumnos['Id']?></strong></td>
                                    <td><?php  echo htmlspecialchars($alumnos['nombre'])?></td>
                                    <td><?php  echo htmlspecialchars($alumnos['correo'])?></td>
                                    <td><?php  echo $alumnos['fecha_registro']?></td>
                                    <td><?php echo htmlspecialchars($alumnos['telefono'])?></td>
                                </tr>
                            <?php endforeach; ?>

                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted">No hay alumnos registrados aún.</td>
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi primer script en PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<?php
$nombre = "Brenda";
$apellido = "Sifontes";
$edad = 24;
$ciudad= "Copan";

$num1 = 15;
$num2 = 5;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
?>

<div class="container mt-5">

    <h2 class="text-center mb-4 text-secondary">
        Información en PHP
    </h2>

    <div class="row">

        <!-- Información personal -->
        <div class="col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-info bg-opacity-25">
                    Información Personal
                </div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
                    <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
                    <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
                    <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
                </div>
            </div>
        </div>

        <!-- Operaciones -->
        <div class="col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success bg-opacity-25">
                    Operaciones Básicas
                </div>

                <div class="card-body">
                    <p>Suma: <?php echo $suma; ?></p>
                    <p>Resta: <?php echo $resta; ?></p>
                    <p>Multiplicación: <?php echo $multiplicacion; ?></p>
                    <p>División: <?php echo $division; ?></p>
                </div>
            </div>
        </div>

    </div>

    <!-- Edad futura -->
    <div class="card border-0 shadow-sm mt-3">
        <div class="card-header bg-warning bg-opacity-25">
            Edad futura
        </div>

        <div class="card-body text-center">
            Dentro de 5 años tendré:
            <span class="fw-bold">
                <?php echo $edad + 5; ?> años
            </span>
        </div>
    </div>

</div>

</body>
</html>
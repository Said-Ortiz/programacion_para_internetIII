<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Envios</title>
</head>
<style>
    body {
        background-color: #f4f4f9;
    }

    .result-container {
        background-color: #fff;
        border: 0.5px solid;
        margin-top: 1rem;
        padding: 1rem;
        border-radius: 1rem;
        max-width: fit-content;
    }

    .form-group {
        margin: 0.5rem 0 0.5rem 0;
    }

    .alerta {
        padding: 0.5rem;
        border: 0.5px solid;
        margin-top: 1rem;
    }


    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;

    }
</style>

<body>
    <div>
        <h2>Registro de Salida de Maquinaria</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="conductor">Nombre del Conductor:</label>
                <input type="text" name="conductor" required>
            </div>

            <div class="form-group">
                <label for="codigo">Código de la Maquinaria/Camión:</label>
                <input type="text" name="codigo" placeholder="Ej: CAM-01" required>
            </div>


            <div class="form-group">
                <label for="peso">Peso de la carga (Kilogramos):</label>
                <input type="number" name="peso" min="0" step="1" required>
            </div>

            <button type="submit" name="registrar_salida">Registrar Salida</button>
        </form>
    </div>

    <?php
    //Procesamiento de backend 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $conductor = ($_POST['conductor']);
        $codigo = ($_POST['codigo']);
        $peso = intval($_POST['peso']);


        //componente dinamico de alerta
        echo '<div class="result-container">';

        //condicional para la alerta
        if ($peso > 5000) {
            echo '<div class="alerta alert-danger">Alerta: El camión requiere un pago de impuesto por sobrepeso.</div>';
        } else {
            echo '<div class="alerta alert-success">Tránsito autorizado: Peso dentro del límite legal.</div>';
        }

        // Datos del formulario
        $peso_formateado = number_format($peso, 0);

        echo '<h3>Resumen del Registro</h3>';
        echo '<p><strong>Conductor:</strong> ' . $conductor . '</p>';
        echo '<p><strong>Código de Unidad:</strong> ' . $codigo . '</p>';
        echo '<p><strong>Peso Registrado:</strong> ' . $peso_formateado . ' kg</p>';

        echo '</div>';
    }
    ?>

</body>

</html>

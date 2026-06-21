<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Control de Envíos</title>
    <style>
        .rojo { color: red; font-weight: bold; }
        .verde { color: green; font-weight: bold; }
        .contenedor { width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Registro de Salida de Camiones</h2>

    <form method="POST">
        <label>Nombre del Conductor:</label><br>
        <input type="text" name="conductor" required><br><br>

        <label>Código de la Maquinaria/Camión:</label><br>
        <input type="text" name="codigo" required><br><br>

        <label>Peso de la carga (kg):</label><br>
        <input type="number" name="peso" required><br><br>

        <button type="submit">Registrar Salida</button>
    </form>

    <hr>

    <?php
    if ($_POST) {
        $conductor = $_POST["conductor"];
        $codigo = $_POST["codigo"];
        $peso = $_POST["peso"];

        // Formatear peso con miles
        $peso_formateado = number_format($peso, 0, ".", ",");

        // Evaluar reglas del negocio
        if ($peso > 5000) {
            echo "<p class='rojo'>Alerta: El camión requiere un pago de impuesto por sobrepeso</p>";
        } else {
            echo "<p class='verde'>Tránsito autorizado: Peso dentro del límite legal</p>";
        }

        // Resumen
        echo "<h3>Resumen del Registro</h3>";
        echo "<p><strong>Conductor:</strong> $conductor</p>";
        echo "<p><strong>Código del Camión:</strong> $codigo</p>";
        echo "<p><strong>Peso:</strong> $peso_formateado kg</p>";
    }
    ?>

</div>

</body>
</html>

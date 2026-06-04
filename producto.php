<?php

$nombre = "Laptop Gamer ASUS ROG";
$precio = 1250.00;
$disponibilidad = true; 
$detalle = "Procesador AMD Ryzen 7, 16GB RAM, 512GB SSD, Tarjeta Gráfica RTX 4060.";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .producto-box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); max-width: 500px; }
        h2 { color: #333; }
        li { margin-bottom: 10px; font-size: 1.1em; }
        .disponible { color: green; font-weight: bold; }
        .agotado { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <div class="producto-box">
        <h2>Información del Producto</h2>
        
        <ol>
            <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
            <li><strong>Precio:</strong> $<?php echo number_format($precio, 2); ?></li>
            <li><strong>Detalle:</strong> <?php echo $detalle; ?></li>
            <li><strong>Disponibilidad:</strong> 
                <?php if ($disponibilidad): ?>
                    <span class="disponible">Disponible en tienda</span>
                <?php else: ?>
                    <span class="agotado">Agotado temporalmente</span>
                <?php endif; ?>
            </li>
        </ol>
    </div>

</body>
</html>
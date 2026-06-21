<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
</head>
<body>

<?php
$producto = "Caja de Tornillos 1/2\"";
$categoria = "Ferretería";
$precio = 4.75;
$stock = 250;
$ubicacion = "Estante B3";
$proveedor = "Distribuidora Industrial S.A.";
$disponible = $stock > 0;
?>

<h3>Detalle del Producto en Almacén:</h3>
<ol>
    <li>Producto: <?php echo $producto; ?></li>
    <li>Categoría: <?php echo $categoria; ?></li>
    <li>Precio unitario: $<?php echo $precio; ?></li>
    <li>Stock disponible: <?php echo $stock; ?> unidades</li>
    <li>Ubicación en almacén: <?php echo $ubicacion; ?></li>
    <li>Proveedor: <?php echo $proveedor; ?></li>
    <li>Estado: <?php echo $disponible ? "Disponible" : "Agotado"; ?></li>
</ol>

</body>
</html>

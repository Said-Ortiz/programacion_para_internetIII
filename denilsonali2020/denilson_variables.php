<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicios de variables en php</title>
</head>
<body>
    <h1>Detalle del Item</h1>
<?php
$name = "MackBook M4 Pro";

$price = "50,000";

$stock ="10 Unidades";

?>

<ol>
<li><p><strong>Producto: </strong><?php echo $name?></p></li>
<li><p><strong>Precio: </strong><?php echo $price?></p></li>
<li><p><strong>Disponibilidad: </strong><?php echo $stock; ?></p> </li>

</ol>
</body>
</html>

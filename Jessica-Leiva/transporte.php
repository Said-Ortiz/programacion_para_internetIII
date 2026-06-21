<?php
if ($_POST) {
    $conductor = $_POST['conductor'];
    $camion = $_POST['camion'];
    $peso = $_POST['peso'];

    if ($peso > 5000) {
        $mensaje = "Alerta: El camión requiere un pago de impuesto por sobrepeso";
        $Alert = "Sobrepeso";
    } else {
        $mensaje= "Tránsito autorizado: Peso dentro del límite legal";
        $Alert = "Autorizado";
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Control de Envíos</title>
</head>


<style>
      body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 30px;
            }
            
    .Sobrepeso{
         background-color: pink;
                color:red;
                padding: 4px;
                border-radius: 4px;
    }

    .Autorizado{
        background-color: lightgreen;
                color:green;
                padding: 4px;
                border-radius: 4px;
    }

   label {
        font-weight: bold;
    }

    form {
        margin-bottom: 20px;
        background-color: #aef9f6;
        padding: 10px;
        border-radius: 5px;
    }

    input{
        padding: 5px;
        margin: 5px 0;
        width: 200px;
        background-color: #bae0fd;
    }

    h3 {
        color: #7a0ece;
    }
</style>
  



<body>

<h3>Registro de Salida de Camiones</h3>

    <form method="POST" action="">
        <label for="conductor">Nombre del Conductor:</label>
        <input type="text" id="conductor" name="conductor" required><br><br>

        <label for="camion">Código de la Maquinaria/Camión:</label>
        <input type="text" id="camion" name="camion" required><br><br>

        <label for="peso">Peso de la carga en Kilogramos:</label>
        <input type="number" id="peso" name="peso" required><br><br>

        <input type="submit" value="Registrar Salida">
    </form>


<div class="<?php echo $Alert; ?>">
    <p><?php echo $mensaje; ?></p>
</div>


<h3>Datos del Registro</h3>

<ul>
    <li>
        <strong>Nombre del conductor</strong>
        <?php echo ($conductor); ?>
    </li>

    <li>
        <strong>Código del camión:</strong>
        <?php echo ($camion); ?>
    </li>
    <li>
        <strong>Peso de la carga:</strong>
        <?php echo number_format($peso, 0, ','); ?> kg
    </li>
</ul>

</body>
</html>

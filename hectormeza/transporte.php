<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transporte</title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            margin: 60px;
        }
        .pesoMayor{
            background-color: #f34343;
            color: #423b3b;
            padding: 10px;
            border-radius: 5px;

        }
        .pesoAdecuado{
            background-color: #a1d18e;
            color: #423b3b;
            padding: 10px;
            border-radius: 5px;

        }
    </style>
</head>
<body>
    <h1>Sistema de Control de Envios</h1>

    <form method="post" action="">
        <label ><strong>Nombre del Conductor:</strong></label>
        <input type="text" name = "nombreConductor">
        <br><br>
        <label ><strong>Codigo de la Maquinaria:</strong></label>
        <input type="text" name = "codigoMaquinaria">
        <br><br>
        <label ><strong>Peso de Carga:</strong></label>
        <input type="text" name = "pesoCarga">
        <br><br>

        <input type="submit" name = "Registrar Salida" value="Registar">
        <hr><hr>
    </form>


    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conductor = $_POST["nombreConductor"];
        $codigo = $_POST["codigoMaquinaria"];
        $peso = $_POST["pesoCarga"];

        if($peso > 5000){
            $mensaje = "Alerta: El camion requiere un pago de impuesto por sobrepeso. ";
            $claseCss = "pesoMayor";
        }
        else{
            $mensaje = "Transito autorizado: Peso dentro del limite legal.";
            $claseCss = "pesoAdecuado";

        }

    }
     
    ?>
      <div class ="<?php echo $claseCss;  ?>">
        <p><strong></strong> <?php echo $mensaje; ?></p>
    </div>

    

    <h3>Datos del Conductor</h3>
    <ul>
        <li><strong>Nombre del Conductor:</strong> <?php echo $conductor?></li>
        <li><strong>Codigo Maquinaria:</strong> <?php echo $codigo?></li>
        <li><strong>Peso de la Carga:</strong> <?php echo number_format($peso)?> kg.</li>
    </ul>
    <hr>
    
</body>
</html>
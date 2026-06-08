<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE CONTROL DE ENVIOS</title>
    <style>
        body{
            font-family: Arial, sans-serif;
           margin: 30px;
        }
        .ALERTA{
            background-color: #ffcccc;
            color: #e82903;
            padding: 10px;
            border: 1px solid #cc0000;
            margin-bottom: 20px;
        }
        .NORMAL{
            background-color: #ccffcc;
            color: #0de75d;
            padding: 10px;
            border: 1px solid #006600;
            margin-bottom: 20px;
        }
        </style>
</head>

<body>

<form action="Sistema_control_envios_thamy.php" method="POST">

<h2>SISTEMA DE CONTROL DE ENVIOS</H2>

<label><strong>NOMBRE DEL CONDUCTOR:</strong></label>
<input type="text" name="txtCONDUCTOR" required>

<br>

<label><strong>CÓDIGO DE LA MAQUINARIA/CAMIÓN:</strong> </label>
<input type="text" name="txtCOD_MAQUI" required>

<br>

<label><strong>PESO DE LA CARGA:</strong> </label>
<input type="text" name="numPESO" required>
<br>
<BUtton type="submit">ENVIAR REGISTROS</BUtton>

</form>

    <?php 

if($_POST){
    //ESTAS VARIABLES SERAN LAS QUE UTILIZARE EN LOS IMPUT
    $NOMBRE_CONDUCTOR=$_POST['txtCONDUCTOR'];
    $COD_MAQUINARIA=$_POST['txtCOD_MAQUI'];
    $PESO_CARGA=$_POST['numPESO'];

    if($PESO_CARGA>5000){
        $MENSAJE=" EL CAMION REQUIERE DE UN PAGO DE IMPUESTO POR SOBRE PESO";
        $CLASES="ALERTA";

    }else{
        $MENSAJE="TRÁSITO HA AUTORIZADO: PESO DENTRO DEL LÍMITE LEGAL";
        $CLASES="NORMAL";
    }

    }

    ?>

<h2>SISTEMA DE CONTROL DE ENVIOS</H2>

<UL>
    <LI>NOMBRE DEL CONDUCTOR: <strong><?php echo $NOMBRE_CONDUCTOR ?></strong></LI>
    <LI>CÓDIGO DE LA MAQUINARÍA: <strong><?php echo $COD_MAQUINARIA ?></strong></LI>
    <LI>PESO DE LA CARGA: <strong><?php echo $PESO_CARGA ?> kg</strong></LI>
</UL>

    <div class="<?php echo $CLASES; ?>">
        <P><strong>ESTADO:</strong> <?php echo $MENSAJE; ?></P>
    </div>

</body>
</html>
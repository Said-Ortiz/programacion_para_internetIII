
<?php 

//Definir los parametros de conexion
    $host = "localhost";
    $db = "sistema_escolar";
    $usuario = "root";
    //Aqui uso mi password mysql porque ya tenia configurado anteriormente un usuario root, no la subi al repo.
    $password = "";


    try{

    $conexion = new PDO("mysql:host=$host; dbname=$db;charset=utf8", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $error){
        die("Error de conexion " . $error->getMessage());

    }



    


?>
    

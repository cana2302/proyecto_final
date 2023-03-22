<?php
    require("sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario averias1</title>
        <style>
            body{
                background-color: black;
                color: white;
                text-align: center;
            }
            header{
                text-align: right;
                background-color: white;
                color: black;
            }
            .portada{
                width: 100%;
                height: 220px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php
                require("header1.php");
            ?>
        </header>    
        
        <?php

            // -----------------INSERTAR REGISTRO EN BASE DE DATOS-----------------------

            $insertar_nombre_aseguradora = $_POST['averia1'];
            $insertar_nombre_asegurado= $_POST['averia2'];
            $insertar_fecha= $_POST['averia3'];
            $insertar_descripcion= $_POST['averia4'];       
            $insertar_imagen= $_POST['averia5'];   
            
            try {          
                $base_pdo_objeto1 = new PDO ('mysql:host=localhost; dbname=proyecto', 'root', '34933717');
                $base_pdo_objeto1->exec("SET CHARACTER SET utf8");
                
                $sql_insert = "INSERT INTO averias (aseguradora, asegurado, fecha, descripcion, imagen) VALUES (:nombre_aseguradora, :nombre_asegurado, :fecha, :descripcion, :ruta)";

                $resultado_pdostatement1 = $base_pdo_objeto1->prepare($sql_insert); //creacion de objeto pdostatement
                $resultado_pdostatement1->execute(array(":nombre_aseguradora"=>$insertar_nombre_aseguradora,":nombre_asegurado"=>$insertar_nombre_asegurado,":fecha"=>$insertar_fecha,":descripcion"=>$insertar_descripcion, ":ruta"=>$insertar_imagen));
            
                $registro = true;
                $registro1 = "<br>Registro insertado de forma exitosa!";       
    

            } catch (Exception $e) {   // El cath se ejecuta solo si el try no ha podido
                echo "<br><br>";
                echo '<p><a href="inicio.php">Inicio</a></p>';
                echo "<br><br>";
                echo "Error al intentar insertar el nuevo registro<br>";
                
                $registro1 = (die ('Error: ' . $e->getMessage()));


            } finally {  // El finally se ejecuta en todos los casos, luego de ejecutar alguno de los dos anteriores (try o catch)
                $base = null;
            }
        
        ?>
        
        <?php
            if ($registro){
                echo '<p>' . $registro1 . '</p>';
            }
        ?>
        <p><a href="inicio.php">Inicio</a></p>

    </body>
</html>
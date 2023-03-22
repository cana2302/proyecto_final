<?php
    require("sesion.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario conexio1</title>
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
                echo '<img src="imagenes/soluciones integrales.png" class="portada"/>';
                echo "<h3>Usuario: " . $_SESSION["sesion_"] . "</h3><a href='cierre_sesion.php'>Cerrar Sesion</a><br>";
            ?>
        </header>    
        
        <?php

            // -----------------INSERTAR REGISTRO EN BASE DE DATOS-----------------------

            $insertar_nombre = $_POST['cliente1'];
            $insertar_domicilio= $_POST['cliente2'];
            $insertar_cif= $_POST['cliente3'];
            $insertar_telefono= $_POST['cliente4'];
            $insertar_mail= $_POST['cliente5'];
            $insertar_persona= $_POST['cliente6'];  
            
            
            try {          
                $base_pdo_objeto1 = new PDO ('mysql:host=localhost; dbname=proyecto', 'root', '34933717');
                $base_pdo_objeto1->exec("SET CHARACTER SET utf8");
                
                $sql_insert = "INSERT INTO aseguradoras1 (nombre, domicilio, cif, telefono, mail, persona) VALUES (:nombre, :domicilio, :cif, :telefono, :mail, :persona)";

                $resultado_pdostatement1 = $base_pdo_objeto1->prepare($sql_insert); //creacion de objeto pdostatement
                $resultado_pdostatement1->execute(array(":nombre"=>$insertar_nombre,":domicilio"=>$insertar_domicilio,":cif"=>$insertar_cif,":telefono"=>$insertar_telefono,":mail"=>$insertar_mail, ":persona"=>$insertar_persona));
            
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
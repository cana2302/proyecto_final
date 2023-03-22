<?php
    require("sesion.php");
    require ("devuelve.php");
    
    //Tabla Reparaciones
    $objeto_reparaciones = new Devuelve();
    $array_averias = $objeto_reparaciones->get_reparaciones();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado Reparaciones</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            h2{
                text-align: center;
            }
            table{
                width: 70%;
                margin: auto;
                background-color: black;
                border: 1px solid white;
                padding: 5px;
                color: white;
            }
            td,th{
                text-align: center;
            }
        </style>
    </head>

    <body>
        <header>
            <?php
                require("header1.php");
            ?>
        </header>

        <main>
            <br>    
            <h2>Listado de Reparaciones<br></h2>
            <table>
                <thead>
                    <tr>
                        <th>ID reparación</th>
                        <th>Nombre Aseguradoras</th>
                        <th>Asegurado Particular</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Ruta de imágen</th>
                    </tr>
                </thead>
                <?php
                    foreach($array_averias as $elemento){
                        echo "<tbody>
                            <tr>
                                <td>";
                                    echo $elemento['id'] . "</td>
                                <td>";
                                    echo $elemento['aseguradora'] . "</td>
                                <td>";
                                    echo $elemento['asegurado'] . "</td>
                                <td>";
                                    echo $elemento['fecha'] . "</td>
                                <td>";
                                    echo $elemento['descripcion'] . "</td>
                                <td>";
                                    echo $elemento['imagen'] . "</td>
                            </tr>
                        </tbody>";
                    }        
                ?>
            </table>
        </main>
    </body>
</html>
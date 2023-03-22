<?php
    require("sesion.php");
    require ("devuelve.php");
    
    //Tabla Asegurados Particulares
    $objeto_asegurados = new Devuelve();
    $array_asegurados = $objeto_asegurados->get_asegurados();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado Asegurados</title>
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
            <h2>Listado de Asegurados Particulares<br></h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Teléfono</th>
                        <th>Domicilio de reparación</th>
                    </tr>
                </thead>
                <?php
                    foreach($array_asegurados as $elemento){
                        echo "<tbody>
                            <tr>
                                <td>";
                                    echo $elemento['nombre'] . "
                                </td>
                                <td>";
                                    echo $elemento['direccion'] . "</td>
                                <td>";
                                    echo $elemento['telefono'] . "</td>
                                <td>";
                                    echo $elemento['domicilio_rep'] . "</td>
                            </tr>
                        </tbody>";
                    }        
                ?>
            </table>
        </main>
    </body>
</html>
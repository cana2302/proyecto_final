<?php
    require("sesion.php");
    require ("devuelve.php");
    
    //Tabla Aseguradoras
    $objeto_aseguradoras = new Devuelve();
    $array_aseguradoras = $objeto_aseguradoras->get_aseguradoras();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado Cliente</title>
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
            <h2>Listado de CLIENTES<br></h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Domicilio</th>
                        <th>CIF</th>
                        <th>Teléfono</th>
                        <th>Mail</th>
                        <th>Persona de contacto</th>
                    </tr>
                </thead>
                <?php
                    foreach($array_aseguradoras as $elemento){
                        echo "<tbody>
                            <tr>
                                <td>";
                                    echo $elemento['nombre'] . "
                                </td>
                                <td>";
                                    echo $elemento['domicilio'] . "</td>
                                <td>";
                                    echo $elemento['cif'] . "</td>
                                <td>";
                                    echo $elemento['telefono'] . "</td>
                                <td>";
                                    echo $elemento['mail'] . "</td>
                                <td>";
                                    echo $elemento['persona'] . "</td>
                            </tr>
                        </tbody>";
                    }        
                ?>
            </table>
        </main>
    </body>
</html>
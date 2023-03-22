<?php
    require("sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            .portada{
                width: 100%;
            }
            #usuario{
                text-align: right;
                background-color: white;
                color: black;
            }
            .foto{
                display: flex;
                align-items: center;
                justify-content: space-around;
                margin-bottom: 5px;
            }
            .img{
                text-align: center;
                clip-path: inset(10% 10% 10% 10%);
            }
            header{
                top: 0px;
                margin-top: 0px;
                left: 0px;
                background: black;
                width: 100%;
            }
            h1{
                text-align: center;
            }
            h2{
                text-align: center;
            }
            table{
                width: 30%;
                background-color: #FFC;
                border: 2px dotted #F00;
                margin: auto;
                color: black;
            }
            .izq{
                text-align: right;
            }
            .der{
                text-align: left;
            }
            td{
                text-align: left;
                padding: 10px;
            }
        </style>
    </head>
    <body>

        <header>
            <?php
                require("header.php");
            ?>
        </header>
        <main>
            <div class="foto" id="arriba">
                <div class="img">
                    <a href='formulario_clientes.php'><img src="imagenes1/form_cliente.png" alt="formulario clientes" width="75%" height="75%"></a>
                </div>                        
                <div class="img">
                    <a href="formulario_asegurados.php"><img src="imagenes1/form_asegurado.png" alt="formulario asegurados" width="75%" height="75%"></a> 
                </div>               
                <div class="img">
                    <a href="formulario_averias.php"><img src="imagenes1/form_averia.png" alt="formulario reparaciones" width="75%" height="75%"></a>
                </div>
            </div>
            <div class="foto">
                <div class="img">
                    <a href="listado_clientes.php"><img src="imagenes1/list_aseguradoras.png" alt="lista clientes" width="75%" height="75%"></a> 
                </div>                        
                <div class="img">
                    <a href="listado_asegurados.php"><img src="imagenes1/list_asegurados.png" alt="lista asegurados" width="75%" height="75%"></a>
                </div>
                <div class="img">
                    <a href="listado_averias.php"><img src="imagenes1/list_averias.png" alt="lista averias" width="75%" height="75%"></a>
                </div>
            </div>
<!--
            <table>
                    <tr>
                    <td><a href='formulario_clientes.php'><img src="imagenes/7.png" alt="img formulario" width="40" height="40"></a></td>
                        <td><a href='formulario_clientes.php'>Formulario para ingresar nuevos <b>CLIENTES</b></a></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="listado_clientes.php"><img src="imagenes/listado2.png" alt="img listado" width="40" height="40"></a></td>
                        <td><a href="listado_clientes.php">Listado de <b>ASEGURADORAS</b></a></td>  
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="formulario_asegurados.php"><img src="imagenes/listado1.png" alt="img formulario" width="40" height="40"></a></td>
                        <td><a href="formulario_asegurados.php">Formulario para ingresar nuevos <b>ASEGURADOS</b></a></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="listado_asegurados.php"><img src="imagenes/listado2.png" alt="img listado" width="40" height="40"></a></td>
                        <td><a href="listado_asegurados.php">Listado de <b>ASEGURADOS</b></a></td>   
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="formulario_averias.php"><img src="imagenes/listado1.png" alt="img formulario" width="40" height="40"></a></td>
                        <td><a href="formulario_averias.php">Formulario para ingresar nuevas <b>AVERÍAS</b></a></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="listado_averias.php"><img src="imagenes/listado2.png" alt="img listado" width="40" height="40"></a></td>
                        <td><a href="listado_averias.php">Listado de <b>AVERÍAS</b></a></td>
                    </tr>
            </table> -->
        </main> 

    </body>
</html>
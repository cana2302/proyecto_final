<?php
    require("sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Cliente</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            table{
                width: 40%;
                margin: auto;
                background-color: black;
                border: 1px solid white;
                padding: 5px;
                color: white;
            }
            td{
                text-align: center;
            }
            .izq{
                text-align: right;
            }
            .der{
                text-align: left;
            }
            h2{
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
            <h2>Formulario para ingresar nuevos CLIENTES</h2>
            <form action="formulario_cliente1.php" method="post">                
                <table>
                    <tr>
                        <td colspan="2"><label>&nbsp</label></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="nombre">Nombre Aseguradora:</label></td>
                        <td class="der"><input type="text" name="cliente1" id="nombre" required/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="domicilio">Domicilio:</label></td>
                        <td class="der"><input type="text" name="cliente2" id="domicilio" required/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="cif">CIF:</label></td>
                        <td class="der"><input type="text" name="cliente3" id="cif" required/></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="tel">Teléfono:</label></td>
                        <td class="der"><input type="text" name="cliente4" id="tel" required/></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="mail">Mail:</label></td>
                        <td class="der"><input type="email" name="cliente5" id="mail" required></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="persona">Persona de contacto:</label></td>
                        <td class="der"><input type="text" name="cliente6" id="persona" required/></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="enviando" value="  Enviar  "></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                </table>
            </form>
        </main>        
    </body>
</html>
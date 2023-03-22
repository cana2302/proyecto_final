<?php
    require("sesion.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nueva Avería</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            table{
                width: 60%;
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
            <h2>Formulario para ingresar nueva AVERÍA</h2>
            <form action="formulario_averias1.php" method="post">                
                <table>
                    <tr>
                        <td colspan="2"><label>&nbsp</label></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="nombre">Nombre Aseguradora</label></td>
                        <td class="der"><input list="listado_clientes" name="averia1" required/>
                            <datalist id="listado_clientes">
                                <option value="Mapre"></option>
                                <option value="Aseguradora1"></option>
                                <option value="Aseguradora2"></option>   
                        </td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="aseguradora">Asegurado Particular</label></td>
                        <td class="der"><input type="text" name="averia2" id="aseguradora" required/></td>
                    </tr>
                    <tr>
                        <td class="izq"><label for="fecha">Fecha</label></td>
                        <td class="der"><input type="date" name="averia3" id="fecha" required/></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="desc">Descripción</label></td>
                        <td class="der"><textarea name="averia4" id="desc" cols="72" rows="12" required maxlength="749"></textarea></td>
                    </tr>
                    <tr> 
                        <td class="izq"><label for="foto">Imágen</label></td>
                        <td class="der"><input type="file" name="averia5" id="foto"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="enviando" value=" Enviar "></td>
                    </tr>
                    <tr>
                        <td>&nbsp&nbsp&nbsp&nbsp</td>
                    </tr>
                </table>
            </form>
        </main>
    </body>
</html>
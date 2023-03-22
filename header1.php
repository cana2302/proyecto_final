<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            #portada{
                width: 100%;
            }
            nav{
                display: flex;
                align-items: center;
                background-color: black;
                border-bottom: white solid 1px;
                height: 70px;
            }
            .menu1{
                flex: 10;
                text-align: center;
                justify-content: space-around;
                color: white;
                text-decoration-line: none;
            }
            #menu2{
                flex: 5;
                color: white;
                text-align: center;
                justify-content: space-around;
                text-decoration-line: none;
            }
            .menu3{
                flex: 8;
                text-align: center;
                justify-content: space-around;
                color: white;
                text-decoration-line: none;
            }
            #usuario1{
                flex: 8;
                text-align: center;
                justify-content: space-around;
                text-decoration-line: none;
                color: white;
            }
        </style>
    </head>

    <body>
        <header>
            <img src="imagenes/portada4.png" id="portada"/>
            <nav>
                <a id="menu2" href='inicio.php'>INICIO</a>
                <a class="menu3" href='formulario_clientes.php'>NUEVO CLIENTE</a>
                <a class="menu1" href='formulario_asegurados.php'>NUEVO ASEGURADO</a>
                <a class="menu3" href='formulario_averias.php'>NUEVA AVERÍA</a>
                <a class="menu1" href='listado_clientes.php'>LISTADO CLIENTES</a>
                <a class="menu1" href='listado_asegurados.php'>LISTADO ASEGURADOS</a>
                <a class="menu1" href='listado_averias.php'>LISTADO AVERIAS</a>
                <div id="usuario1"> <?php echo "USUARIO: <b>" . $_SESSION["sesion_"] . "</b><br><a href='cierre_sesion.php'>CERRAR SESION</a>"; ?> </div>
            </nav>
        </header>   

    </body>
</html>
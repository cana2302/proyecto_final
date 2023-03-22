<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8mb4_unicode_ci">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            img{
                width: 100%;
            }
            h3{
                text-align: center;
            }
            table{
                width: 30%;
                background-color: black;
                border: 1px solid /*dotted*/ white;
                margin: auto;
                color: white;
            }
            .izq{
                text-align: right;
            }
            .der{
                text-align: left;
            }
            td{
                text-align: center;
                padding: 10px;
            }
            div{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
        <img src="imagenes/portada2.png"/>
        </header>
        <main>            
            <h3><br>Introduce tus datos</h3>
            <div id="login">
                <br>
                <form action="comprueba_login.php" method="post">
                    <table>
                        <tr>
                            <td><label>&nbsp</label></td>
                        </tr>
                        <tr>
                            <td class="izq">Login:</td><td class="der"><input type="text" name="login2"></td>
                        </tr>
                        <tr>
                            <td class="izq">Password:</td><td class="der"><input type="password" name="contra2"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="enviar1" value=" INGRESAR "></td>
                        </tr>
                        <tr>
                            <td><label>&nbsp</label></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div>
                <br><br>
                <p>Para poder utilizar la aplicación, deberá contar con un USUARIO registrado.</p>
                <p>En caso de no contar con un 'usuario' y 'contraseña', deberá contactar al administrador.</p>
                <p>En caso de haber olvidado 'usuario' y/o 'contraseña', deberá contactar al administrador.</p>
            </div>
        </main>
    </body>
</html>
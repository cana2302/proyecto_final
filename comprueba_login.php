<?php    

try {

    $base = new PDO ("mysql:host=localhost; dbname=proyecto", "root", "34933717");
    $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Instruccion sql que verificara usuario y contraseña en la bbdd:
    $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login2 AND CONTRA= :contra2";      
    
    //Consulta preparada con marcadores:
    $resultado = $base->prepare($sql);

    //Tomamos datos introducidos por el usuario y convertimos a html:
    // 'addlashes' --> evitar inyeccion sql            
    $login1=htmlentities(addslashes($_POST["login2"]));
    $contra1=htmlentities(addslashes($_POST["contra2"]));
    
    //Relacionar marcadores con sus variable:
    $resultado->bindValue(':login2',$login1, PDO::PARAM_STR);
    $resultado->bindValue(':contra2',$contra1, PDO::PARAM_STR);

    //Ejecutar instrucción sql:
    $resultado->execute();

    //Obtener número de registros que devuelve nuestra consulta
    //En caso de no coincidir usuario&contraseña --> devuelve=0
    $numero_registro = $resultado->rowCount();
    
    if ($numero_registro!=0) {  //(si el usuario existe, ...)
        //Iniciar sesion para el usuario que se acaba de logear:
        session_start();
        //Almacenar en variable superglobal el login del usuario:
        $_SESSION["sesion_"]=$_POST["login2"];
        
        //Redirigir a otra pagina
        echo"<script language='javascript'>window.location='inicio.php'</script>;";
        //header('Location:http://localhost/curso_php/sistema_login/usuraios_registrados1.php');
                
    } else {
        //redirigir a la propia página en caso de usuario incorrecto
        echo"<script language='javascript'>window.location='index.php'</script>;";
        //header("Location:login.php");
    }

}catch (Exception $e) {
    die ("Error: " . $e->getMessage());
}

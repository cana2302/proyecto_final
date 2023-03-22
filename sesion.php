<?php

    /*Este bloque de php verifica la sesion iniciado por el usuario,
    evitando que un usuario desconocido pueda ingresar a página introduciendo
    la URL directamente, sin antes logearse.*/

    //Reanuda sesion
    session_start();

    //Verificar si no hay registro en la variable superglobal
    if (!(isset($_SESSION["sesion_"]))){
        //Redirigir al login
        echo"<script language='javascript'>window.location='index.php'</script>;";
    }


?>
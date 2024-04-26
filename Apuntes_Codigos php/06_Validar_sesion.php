<?php

session_start();
if(isset($_SESSION["Mi_Sesion"])){
    echo "Hola,". $_SESSION["Mi_Sesion"] . "!";
}else{
    echo "No se a creado la sesión";
}

?>
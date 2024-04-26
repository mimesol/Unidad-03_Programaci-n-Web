<?php

if(isset($_COOKIE["Mi_cookie"])){
    echo "Hola, ". $_COOKIE["Mi_cookie"];
}else{
    echo "No se a creado la cookie";
}

?>
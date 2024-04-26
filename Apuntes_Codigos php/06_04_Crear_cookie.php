<?php

$nombre_cookie = "Mi_cookie";
$valor_cookie = "Karime";
/* $tiempo_cookie = time() + (60*60*24*30); --- 30 dias ---*/
$tiempo_cookie = time() + (1*60); /* --- 1 minuto --- */
setcookie($nombre_cookie,$valor_cookie,$tiempo_cookie);
if(isset($_COOKIE["Mi_cookie"])){
    echo "Se creo correctamente";
}else{
    echo "No se pudo crear";
}

?>
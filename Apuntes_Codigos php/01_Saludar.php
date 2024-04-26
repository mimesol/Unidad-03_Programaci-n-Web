<?php
        $nombre = $_REQUEST['nombre'];
        echo "Hola $nombre"
        
        #esto es otro comentario
        /* esto es un comentario
        de lineas multiples */

        #echo "Hola ".$nombre.", bienvenido";
        echo "<h1>Hola Mundo!</h1>";
        function saludar($nombre){
            echo "<script>alert('Hola $ nombre')</script>"
        }
        saludar('Karime');
?>
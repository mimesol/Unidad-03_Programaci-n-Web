<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de imagenes</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: "Verdana";
        background: black;
        color: white;
    }
    img {
        width: 50vw;
        border-radius: 10px;
    }
</style>
<body>
    <h1>Mi galeria de Imagenes</h1>
    <nav>
        <ul>
            <li><a href="09_Subir archivos al servidor.php">Subir Imagen</a></li>
            <li><a href="#">Registrar</a></li>
        </ul>
    </nav>
    <?php
        $ruta_imagenes = "imagenes/";
        $imagenes = opendir( $ruta_imagenes );
        $hay_imagenes = false;

        if($imagenes){
            while( $imagen = readdir( $imagenes ) ) {
                if ( is_file( $ruta_imagenes . $imagen ) && getimagesize( $ruta_imagenes . $imagen ))
                {
                    echo "<img src= '$ruta_imagenes$imagen'>";
                    $hay_imagenes = true;
                }
            }
            closedir( $imagenes );
        }else{
            echo "Error: al cargar carpeta de imagenes";
        }
        if(!$hay_imagenes){
            echo "No hay imagenes aun. Fue la primera";
        }
        
    ?>
</body>
</html>
<?php
session_start();
if(isset($_SESSION["Mi sesion"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos al servidor</title>
</head>
<body>
    <h1>Subir archivos</h1>
    <h2><?php echo "Bienvenido, ".$_SESSION["Usuario"] ?></h2>
    <nav>
        <ul>
            <li>
                <a href="07_01_Imagenes 02.php">Ver Galeria</a>
            </li>
            <li>
                <a href="09_02_Cerrar sesion.php">Cerrar sesión</a>
            </li>
        </ul>
    </nav>
    <form action="subir_archivos.php" enctype="multipart/form-data" method="post">
        <input type="file" name="archivo" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
}else{
    header("Location: 07_03_Login.php");
}
?>
<?php
session_start();
if(isset($_SESSION["Usuario"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>
<body>
    <h1>Subir archivos</h1>
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
<?php
if(isset($_SESSION["Usuario"])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<body>
    <h1>Iniciar sesion</h1>
    <form action="07_04_Validar Login.php" method="post">
        <label for="user">Nombre del Usuario</label>
        <br>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">Contraseña</label>
        <br>
        <input type="text" name="pass" id="pass">
        <br>
        <input type="submit" value="Iniciar sesion">
    </form>
</body>
</html>
<?php
    }else{
        header("Location: 07_01_Imagenes 02.php");
    }
?>
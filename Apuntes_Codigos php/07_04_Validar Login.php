<?php
session_start();
$usuario = $_POST["user"];
$contrasena = $_POST["pass"];

$usuarios = array(
    "admin" => "123"
    "Karime" => "123"
);
if(isset($usuarios[$usuario] && $usuarios[$usuario] == $contrasena)){
    $_SESSION["Usuario"];
    header("Location: 07_03_Login.php");
}else{
    echon "Error: Usuario y/o contraseña son incorrectos.";
}
?>
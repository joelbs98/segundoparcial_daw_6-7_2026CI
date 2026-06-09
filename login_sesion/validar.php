<?php
session_start();
/*
POST → servidor: PHP recibe con $_POST.
Si está bien: crea estado guardando $_SESSION["usuario"].
Luego redirige a dashboard.php.
*/


//1)Recibir datos con POST
$usuario = $_POST["usuario"] ?? "";
$clave = $_POST["clave"] ?? "";

//2)Credenciales "quemadas"
$usuario_correcto = "admin";
$clave_correcta = "1234";

//3)Validación básica
if ($usuario === $usuario_correcto && $clave === $clave_correcta) {

    //4) Guardar estado(sesión)
    $_SESSION["usuario"] = $usuario;

    //5)Redirigir a página protegida
    header("Location: dashboard.php");
    exit;
}

//Si falla, volver al login con un mensaje
header("Location: login.php?msg=" . urlencode("Usuario o contraseña incorrectos"));

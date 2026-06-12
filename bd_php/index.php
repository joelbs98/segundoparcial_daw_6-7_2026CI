<?php
/*
Punto de entrada
Qué hace: decide a dónde mandar al usuario:
si hay sesión → dashboard.php
si no hay sesión → login.php
Index no muestra nada, solo redirige según el estado
*/
?>


<?php
session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}

header("Location: login.php");
exit;
?>
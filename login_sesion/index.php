<?php
session_start();

//Si hay sesión, ir al dashboard
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}

//Si no hay sesión, ir al login
header("Location: login.php");
exit;

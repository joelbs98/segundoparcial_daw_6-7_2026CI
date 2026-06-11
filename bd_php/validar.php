<?php
/*
Procesa el login (POST → BD → Sesión)
Qué hace:
recibe usuario y clave por POST
consulta la BD
si existe → crea sesión y manda a dashboard
si no → vuelve a login con mensaje
Este archivo es un guardia, revisa en la BD y decide si entra
*/
?>

<?php
session_start();
include "conexion.php";

$usuario = $_POST["usuario"] ?? "";
$clave = $_POST["clave"] ?? "";

if ($usuario === "" || $clave === "") {
    header("Location: login.php?msg=" . urlencode("Complete todos los campos"));
    exit;
}

$sql = "SELECT id, usuario FROM usuarios WHERE usuario='$usuario' AND
clave='$clave' LIMIT 1";
$res = $conn->query($sql);

if ($res && $res->num_rows === 1) {
    $fila = $res->fetch_assoc();
    $_SESSION["usuario"] = $fila["usuario"];
    $_SESSION["id_usuario"] = $fila["id"];

    header("Location: dashboard.php");
    exit;
}

header("Location: login.php?msg=" . urlencode("Usuario o clave incorrectos"));
exit;

?>
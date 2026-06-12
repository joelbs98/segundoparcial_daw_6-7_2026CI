<?php
/*
(Página protegida por sesión)
Esta página no depende de POST.
Depende del estado guardado en el servidor: $_SESSION.
Si no hay sesión → lo manda al login.
*/
?>

<?php
session_start();
//Si no existe la sesión, no se puede entrar
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php?msg=" . urlencode("Debes iniciar sesión primero"));
    exit;
}
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h1>Dashboard (Pagina protegida)</h1>
    <p>Bienvenido, <strong><?= htmlspecialchars($usuario) ?></strong></p>

    <p>Si estas aqui, significa que la sesión esta activa</p>

    <a href="usuarios.php">Lista de usuarios</a>
    <a href="logout.php">Cerrar sesión</a>

</body>

</html>
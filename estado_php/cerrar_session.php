<?php
/*
👉 Este archivo CIERRA la sesión
“Cuando cerramos la sesión,
 el servidor borra la información del usuario.”
*/
?>

<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>

<body>
    <h1>SESIÓN CERRADA</h1>
    <p>La sesión ha sido eliminada</p>

    <a href="index.php">Volver</a>

</body>

</html>
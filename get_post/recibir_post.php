<?php
//RECIBIR DATOS CON POST
$nombre = $_POST["nombre"] ?? "";
$correo = $_POST["correo"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir POST</title>
</head>

<body>
    <h1>DATOS RECIBIDOS CON POST</h1>
    <p><strong>Nombre: </strong> <?= $nombre ?></p>
    <p><strong>Correo: </strong> <?= $correo ?></p>

    <br>
    <a href="index.php">Volver</a>

</body>

</html>
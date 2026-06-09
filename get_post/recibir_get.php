<?php
//RECIBIR DATOS CON GET
$curso = $_GET["curso"] ?? "No definido";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir GET</title>
</head>

<body>
    <h1>DATOS RECIBIDOS CON GET</h1>
    <p>Curso seleccionado: </p>
    <strong><?= $curso ?></strong>

    <br><br>
    <a href="index.php">Volver</a>

</body>

</html>
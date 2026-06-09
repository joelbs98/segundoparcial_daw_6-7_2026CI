<?php
/*
(Formulario que envía por POST)
El formulario envía datos con POST a validar.php.
Aquí todavía no hay sesión creada, solo el formulario.
*/
?>

<?php
//Si ya esta logeado, lo mandamos al dashboard
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}


//Mensaje opcional (viene por GET desde validar.php / logout.php / dashboard.php)
$mensaje = $_GET["msg"] ?? "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login (POST + Sesión)</h1>

    <?php if ($mensaje !== ""): ?>
        <p><strong><?= htmlspecialchars($mensaje) ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="validar.php">
        <label>Usuario: </label>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña: </label>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Ingresar</button>

        <p><em>Crdenciales de prueba: admin / 1234</em></p>

    </form>


</body>

</html>
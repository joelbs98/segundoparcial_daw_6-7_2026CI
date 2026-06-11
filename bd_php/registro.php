<?php
/*
Registrar usuario (POST → INSERT)
Qué hace: muestra un formulario y, al enviarlo, inserta en BD.
Nota docente: aquí lo mantenemos simple (sin hash aún).
Registro = POST + INSERT en la base de datos
*/
?>

<?php
session_start();
include "conexion.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $correo = $_POST["correo"] ?? "";
    $clave = $_POST["clave"] ?? "";

    if ($usuario === "" || $correo === "" || $clave === "") {
        $msg = "Complete todos los campos";
    } else {
        //Verificar si ya existe el usuario
        $sql_check = "SELECT id FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        $check = $conn->query($sql_check);

        if ($check && $check->num_rows > 0) {
            $msg = "Ese usuario ya existe. Intente otro";
        } else {
            $sql = "INSERT INTO usuarios (usuario,correo,clave) VALUES ('$usuario', '$correo', '$clave')";
            if ($conn->query($sql)) {
                header("Location: login.php?msg=" . urlencode("Registro exitoso. Inicie sesión"));
                exit;
            } else {
                $msg = "Error al registrar";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Registro</h1>
    <?php if ($msg !== ""): ?>
        <p><strong><?= htmlspecialchars($msg) ?></strong></p>
    <?php endif; ?>

    <form method="POST" action="">

        <label>Usuario</label><br>
        <input type="text" name="usuario" required><br><br>
        <label>Correo</label><br>
        <input type="email" name="correo" required><br><br>
        <label>Clave</label><br>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Registrar</button>


    </form>

    <p><a href="login.php">Volver al login</a></p>
</body>

</html>
<?php
/*
Conectar PHP con MySQL
Qué hace: abre la conexión a la BD.
Por qué existe: para no repetir la conexión en cada archivo.
Este archivo es como un cable que conecta PHP con MySQL
*/
?>
<?php
$host = "localhost";
$bd = "web_app67";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
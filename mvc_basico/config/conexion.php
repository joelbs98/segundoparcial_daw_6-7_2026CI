<?php
class Conexion
{
    public static function conectar()
    {
        $host = "localhost";
        $bd = "web_app67";
        $usuario = "root";
        $clave = "";

        $conn = new mysqli($host, $usuario, $clave, $bd);

        if ($conn->connect_error) {
            die("Error de conexion: " . $conn->connect_error);
        }
        return $conn;
    }
}

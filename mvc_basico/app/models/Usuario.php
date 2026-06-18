<?php
require_once __DIR__ . "/../../config/conexion.php";

class Usuario
{

    //Obtener todos los usuarios
    public static function obtenerTodos()
    {
        $conn = Conexion::conectar();

        $sql = "SELECT id, usuario,correo FROM usuarios";
        $resultado = $conn->query($sql);

        $usuarios = [];

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }
        /*
        [
            ["id"=>1, "usuario"=>"joel, "correo"=>"joel@hotmail.com],
            ["id"=>2, "usuario"=>"joel2, "correo"=>"joel2@hotmail.com],
            ["id"=>3, "usuario"=>"joel3, "correo"=>"joel3@hotmail.com],
            ["id"=>4, "usuario"=>"joel4, "correo"=>"joel4@hotmail.com],
        ]


        */

        return $usuarios;
    }
}

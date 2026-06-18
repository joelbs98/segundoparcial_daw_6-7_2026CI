<?php

require_once __DIR__ . "/../models/Usuario.php";
/*
El controlador no imprime HTML
Si hay echo, esta mal!!!
*/
class UsuarioController
{

    //Accion: listar usuarios
    public function listar()
    {
        //1) Pedir los datos al modelo
        $usuarios = Usuario::obtenerTodos();
        //2)Devolver los datos (por ahora)
        return $usuarios;
    }
}

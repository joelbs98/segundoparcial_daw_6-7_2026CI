<?php
//front controller -> Punto de entrada
require_once __DIR__ . "/../app/controllers/UsuarioController.php";

//Router simple por GET
$url = $_GET["url"] ?? "usuarios/listar";

switch ($url) {
    case "usuarios/listar":
        $controller = new UsuarioController();
        $usuarios = $controller->listar();

        //Cargar la vista (La vista usa $usuarios)
        require __DIR__ . "/../app/views/usuarios/listar.php";
        break;
    default:
        http_response_code(404);
        echo "404 - Pagina no encontrada";
}

<?php
// GET - Es un método que usa el navegador para enviar datos al servidor a traves de la url
//Cuando ocurre GET
//Cuando el usuario: Hace clic en un enlace, escribe una dirección en la barra de navegador, usa un formulario con method="GET
//Como viajan los datos: Los datos van escritos en la URL, SON VISIBLES, Se envian junto a la dirección
//Para que se usa GET -> Navegación, busquedas, filtros, consultas
//Como se envian los datos -> El navegador -> Al servidor(PHP)
//GET se usa para pedir información al servidor y los datos viajan en la URL

//POST - Es un metodo que usa el navegador para enviar datos al servidor dentro del cuerpo de la petición
//Cuando ocurre POST
//Cuando el usuario: Envia un formulario, presiona el botón enviar, registra información
//Como viajan los datos: Los datos no se ven en la URL, viajan de forma oculta, se envían internamente
//Para que se usa POST -> Formularios, registros de usuarios, login, envío de mensajes
//Como se envian los datos -> El navegador -> Al servidor(PHP)
//POST se usa para enviar información al servidor y los datos no son visibles en la URL

//DIFERENCIA CLAVE -> GET PIDE INFORMACIÓN - POST ENVIAR INFORMACIÓN
/*Método	Para qué sirve
GET	Consultar información
POST	Enviar información
PUT	Actualizar información
DELETE	Eliminar información
*/
//PUT(ACTUALIZAR) Y DELETE(ELIMINAR) PUEDEN SER SIMULADOS CON EL METODO POST
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio GET y POST</title>
</head>

<body>
    <h1>EJERCICIO GET Y POST</h1>
    <hr>
    <h2>EJERCICIO GET</h2>
    <p>Haz clic en un enlace</p>

    <!-- ENLACES CON GET -->
    <a href="recibir_get.php?curso=desarrollo_web">Desarrollo Web</a>
    <a href="recibir_get.php?curso=programacion">Programación</a>
    <a href="recibir_get.php?curso=base_datos">Base de datos</a>

    <hr>
    <h2>EJERCICIO POST</h2>
    <!-- FORMULARIO POST   -->
    <form method="POST" action="recibir_post.php">
        <label>Nombre: </label><br>
        <input type="text" name="nombre"><br>
        <label>Correo: </label><br>
        <input type="email" name="correo"><br>
        <button type="submit">Enviar</button>

    </form>
</body>

</html>
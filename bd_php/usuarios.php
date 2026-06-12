<?php
include "conexion.php";
//Consulta SQL
$sql = "SELECT id, usuario, correo FROM usuarios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }

        /* th -> table heading (encabezado)  td -> table data (datos) */
        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <h1>Usuarios registrados</h1>

    <table>
        <tr> <!-- TABLE RAW (FILA) -->
            <th>ID</th>
            <th>Usuario</th>
            <th>Correo</th>

        </tr>

        <?php

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["usuario"] . "</td>";
                echo "<td>" . $fila["correo"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay usuarios</td></tr>";
        }
        ?>

    </table>

    <a href="dashboard.php">Volver</a>

</body>

</html>
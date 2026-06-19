<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>
    <h1>Usuarios registrados</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Correo</th>
            </tr>

        </thead>

        <tbody>
            <?php if (!empty($usuarios)):   ?>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= htmlspecialchars($u["id"]) ?></td>
                        <td><?= htmlspecialchars($u["usuario"]) ?></td>
                        <td><?= htmlspecialchars($u["correo"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay usuarios registrados</td>
                </tr>
            <?php endif; ?>
        </tbody>



    </table>

</body>

</html>
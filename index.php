<?php
// Verifica si el servidor no está ya corriendo
if (php_sapi_name() === 'cli-server') {
    // Aquí inicia tu aplicación normalmente, como el código original:
    session_start();

    if (!isset($_SESSION['usuarios'])) {
        $_SESSION['usuarios'] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];

        if (!empty($cedula) && !empty($nombre) && !empty($correo) && !empty($telefono)) {
            $_SESSION['usuarios'][] = [
                'cedula' => htmlspecialchars($cedula),
                'nombre' => htmlspecialchars($nombre),
                'correo' => htmlspecialchars($correo),
                'telefono' => htmlspecialchars($telefono)
            ];
        } else {
            echo "<p style='color:red;'>Por favor completa todos los campos.</p>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Usuarios</title>
    </head>
    <body>
        <h2>Registro de Usuarios PHP</h2>
        
        <form method="POST" action="">
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br><br>
            <button type="submit">Registrar</button>
        </form>
        <h3>Usuarios Registrados</h3>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
            </tr>
            <?php
            if (!empty($_SESSION['usuarios'])) {
                foreach ($_SESSION['usuarios'] as $usuario) {
                    echo "<tr>";
                    echo "<td>" . $usuario['cedula'] . "</td>";
                    echo "<td>" . $usuario['nombre'] . "</td>";
                    echo "<td>" . $usuario['correo'] . "</td>";
                    echo "<td>" . $usuario['telefono'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
            }
            ?>
        </table>
    </body>
    </html>
    <?php
} else {
    // Si no está corriendo desde CLI, iniciamos el servidor embebido
    echo "Iniciando servidor en http://localhost:8080...\n";
    shell_exec("php -S localhost:8080 " . __FILE__);
}

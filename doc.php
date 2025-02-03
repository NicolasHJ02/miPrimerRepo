<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        /* Estilos aquí */
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulario de Contacto</h2>
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="clave">Clave:</label>
            <input type="password" id="clave" name="clave" required>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php
    
    /**
     * 
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $clave = htmlspecialchars($_POST['clave']);

        // Simulación de base de datos
        $usuario_valido = "nicolas";
        $clave_valida = "nicolas123";

        // Validar usuario y clave
        if ($nombre === $usuario_valido && $clave === $clave_valida) {
            echo "<h1 style='color: red; text-align: center;'>Hola Mundo</h1>";
        } else {
            echo "<h1 style='color: red; text-align: center;'>Usuario o clave incorrectos</h1>";
        }
    }
    ?>
</body>
</html>

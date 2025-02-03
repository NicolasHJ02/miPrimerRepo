
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

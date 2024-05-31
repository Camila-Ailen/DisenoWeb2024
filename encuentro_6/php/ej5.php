<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3SQ-LeC4UxfVpkbmmJcQ7hTwPytFxfg1eZA&s">
</head>
<body>
    <header>
        <h1>Ejercicio 5 - Conversor</h1>
    </header>
    <main>
        <section class="container">
            <form action="../php/ej5.php" method="POST">
                <label for="numero">Ingrese un número binario</label>
                <input type="number" id="" name="numero" required>
                <button type="submit">Generar Resultado</button>
            </form>

            <div class="navigation">
                <a href="../html/ej4.html" class="list-item">Anterior</a>
                <a href="../index.html" class="list-item">Menú Principal</a>
                <a href="#" class="list-item">Siguiente</a>
            </div>


            <?php
            // Función para validar si una cadena es un número binario
            function esBinario($numero) {
            return preg_match('/^[01]+$/', $numero);
            }

            // Comprobar si se ha enviado un formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener el número binario ingresado
                $binario = $_POST['numero'];

                // Validar que se haya ingresado un número binario válido
                if (esBinario($binario)) {
                    // Convertir el número binario a decimal
                    $decimal = bindec($binario);

                    // Convertir el número binario a hexadecimal
                    $hexadecimal = dechex($decimal);
                } else {
                    echo "<p style='color: red;'>Por favor, ingrese un número binario válido.</p>";
                }
            }
            ?>

            <?php if (isset($decimal) && isset($hexadecimal)): ?>
                <h2>Resultado:</h2>
                <p>Decimal: <?php echo htmlspecialchars($decimal); ?></p>
                <p>Hexadecimal: <?php echo htmlspecialchars($hexadecimal); ?></p>
            <?php endif; ?>



        </section>
    </main>
</body>
</html>

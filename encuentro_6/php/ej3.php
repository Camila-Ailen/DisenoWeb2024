

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar en letras</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3SQ-LeC4UxfVpkbmmJcQ7hTwPytFxfg1eZA&s">
</head>
<body>
    <header>
        <h1>Ejercicio 3 - Mostrar en letras</h1>
    </header>
    <main>
        <section class="container">
            <form action="../php/ej3.php" method="POST">
                <label for="numero">Ingrese un número</label>
                <input type="number" id="" name="numero" required>
                <button type="submit">Generar Resultado</button>
            </form>

            <div class="navigation">
                <a href="../html/ej2.html" class="list-item">Anterior</a>
                <a href="../index.html" class="list-item">Menú Principal</a>
                <a href="../html/ej4.html" class="list-item">Siguiente</a>
            </div>

            <?php
            function numeroALetras($numero) {
                // Crear una instancia de NumberFormatter para el idioma español
                $formatter = new NumberFormatter('es', NumberFormatter::SPELLOUT);

                // Formatear el número y devolver el resultado en letras
                return $formatter->format($numero);
            }

            // Comprobar si se ha enviado un formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener la cifra ingresada
                $cifra = $_POST['numero'];

                // Convertir la cifra a letras
                $cifraEnLetras = numeroALetras($cifra);
            }

            
            if (isset($cifraEnLetras)): ?>
            <h2>Resultado:</h2>
            <p><?php echo htmlspecialchars($cifraEnLetras); ?></p>
            <?php endif; ?>

        </section>
    </main>
</body>
</html>



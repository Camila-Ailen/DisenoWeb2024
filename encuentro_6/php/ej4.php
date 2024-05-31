<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descomponer Numeros</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3SQ-LeC4UxfVpkbmmJcQ7hTwPytFxfg1eZA&s">
</head>
<body>
    <header>
        <h1>Ejercicio 4 - Descomponer Numeros</h1>
    </header>
    <main>
        <section class="container">
            <form action="../php/ej4.php" method="POST">
                <label for="numero">Ingrese un número</label>
                <input type="number" id="" name="numero" required>
                <button type="submit">Generar Resultado</button>
            </form>

            <div class="navigation">
                <a href="../html/ej3.html" class="list-item">Anterior</a>
                <a href="../index.html" class="list-item">Menú Principal</a>
                <a href="../html/ej5.html" class="list-item">Siguiente</a>
            </div>

            <?php
    // Función para descomponer el número en unidades, decenas, centenas, etc.
    function descomponerNumero($numero) {
        // Convertir el número a una cadena
        $numeroStr = strval($numero);

        // Obtener la longitud del número
        $longitud = strlen($numeroStr);

        // Crear un array para almacenar las partes descompuestas y sus etiquetas
        $partes = [];

        // Array de etiquetas para las posiciones
        $etiquetas = ['Unidad', 'Decena', 'Centena', 'Unidad de mil', 'Decena de mil', 'Centena de mil', 'Unidad de millón'];

        // Recorrer cada dígito del número
        for ($i = 0; $i < $longitud; $i++) {
            // Obtener el valor de la posición actual
            $valor = $numeroStr[$i];

            // Calcular el multiplicador correspondiente a la posición actual
            $multiplicador = pow(10, $longitud - $i - 1);

            // Calcular el valor descompuesto
            $valorDescompuesto = $valor * $multiplicador;

            // Obtener la etiqueta correspondiente
            $etiqueta = $etiquetas[$longitud - $i - 1] ?? 'valor muy grande';

            // Agregar el valor descompuesto y la etiqueta al array de partes
            $partes[] = ['valor' => $valorDescompuesto, 'etiqueta' => $etiqueta];
        }

        // Devolver el array de partes descompuestas
        return $partes;
    }

    // Comprobar si se ha enviado un formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número ingresado
        $numero = $_POST['numero'];

        // Validar que se haya ingresado un número válido
        if (is_numeric($numero)) {
            // Descomponer el número
            $partes = descomponerNumero($numero);
        } else {
            echo "<p style='color: red;'>Por favor, ingrese un número válido.</p>";
        }
    }
    ?>

<?php if (isset($partes)): ?>
        <h2>Resultado:</h2>
        <ul>
            <?php foreach ($partes as $parte): ?>
                <li><?php echo htmlspecialchars($parte['valor']) . " - " . htmlspecialchars($parte['etiqueta']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


        </section>
    </main>
</body>
</html>



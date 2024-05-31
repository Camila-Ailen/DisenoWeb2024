<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Tabla de Multiplicar</title>
        <link rel='stylesheet' href='../css/styles.css'>
        <link rel='shortcut icon' href='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3SQ-LeC4UxfVpkbmmJcQ7hTwPytFxfg1eZA&s'>
    </head>
    <body>
    <header>
        <h1>Ejercicio 1 - Tabla de Multiplicar</h1>
    </header>
    <main>
        <section class='container'>
        <form action='../php/ej1.php' method='POST'>
                <label for='numero'>Ingrese un número entero entre 1 y 9:</label>
                <input type='number' id='' name='numero' min='1' max='9' required>
                <button type='submit'>Generar Tabla</button>
            </form>

            <div class='navigation'>
                <a href='#' class='list-item'>Anterior</a>
                <a href='../index.html' class='list-item'>Menú Principal</a>
                <a href='../html/ej2.html' class='list-item'>Siguiente</a>
            </div>";

        // Recoger el número ingresado por el usuario
        $numero = intval($_POST["numero"]);

        if ($numero >= 1 && $numero <= 9) {
            echo "<h2>Tabla de multiplicar del $numero</h2>";
            echo "<table>";
            echo "<tr><th>Multiplicando</th><th>Multiplicador</th><th>Producto</th></tr>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$numero</td>";
                echo "<td>$i</td>";
                echo "<td>" . ($numero * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            

            echo "</section>
            </main>
            </body>
            </html>";
        } else {
            echo "<p>Por favor, ingrese un número entre 1 y 9.</p>";
        }
    }
?>

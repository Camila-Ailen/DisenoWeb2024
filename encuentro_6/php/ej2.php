    <?php
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Numeros Primos</title>
        <link rel='stylesheet' href='../css/styles.css'>
        <link rel='shortcut icon' href='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3SQ-LeC4UxfVpkbmmJcQ7hTwPytFxfg1eZA&s'>
    </head>
    <body>
    <header>
        <h1>Ejercicio 2 - Numeros Primos</h1>
    </header>
    <main>
        <section class='container'>
        <form action='../php/ej2.php' method='POST'>
                <label for='numero'>Ingrese un número:</label>
                <input type='number' id='' name='numero' required>
                <button type='submit'>Generar Tabla</button>
            </form>

            <div class='navigation'>
                <a href='../html/ej1.html' class='list-item'>Anterior</a>
                <a href='../index.html' class='list-item'>Menú Principal</a>
                <a href='../html/ej3.html' class='list-item'>Siguiente</a>
            </div>";

    function esPrimo($numero) {
        if ($numero < 2) return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) return false;
        }
        return true;
    }

    function obtenerPrimos($inicio, $cantidad) {
        $primos = [];
        $numero = $inicio + 1;
        while (count($primos) < $cantidad) {
            if (esPrimo($numero)) {
                $primos[] = $numero;
            }
            $numero++;
        }
        return $primos;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $primos = obtenerPrimos($numero, 16);

        echo "<h2>Los 16 siguientes números primos a partir de $numero</h2>";
        echo "<table>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                echo "<td>" . $primos[$i * 4 + $j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</section>
            </main>
            </body>
            </html>";
    }
    ?>


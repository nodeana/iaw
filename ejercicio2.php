<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

        /*
            Imprime en pantalla los números impares del 1 al 100 y su suma acumulada,
            usando la estructura if.
        */

        $acumulado = 0;

        for ($i=1; $i<=100; $i++) {
            if ($i % 2 != 0) {
                echo "Número impar: " . $i;
                echo "<br>";
                echo "Suma acumulada: " . $acumulado += $i;
                echo "<p> </p>";
            }
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    
        /*
            Imprime en pantalla los números múltiplos de 5, comprendidos entre el 1 y
            el 100. Usa la estructura for. Devuelve el cuadrado de su suma.
        */

        $acumulado = 0;

        for ($i=1; $i<=100; $i++) { 
            if ($i % 5 == 0) {
                echo $i;
                echo "<br>";
                $acumulado += $i;
            }
        }

        echo "<br>";
        
        echo "La suma es: " . $acumulado . " y su cuadrado es: ". $acumulado ** 2;

    ?>
</body>
</html>
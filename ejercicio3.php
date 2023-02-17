<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    
        /*
            Imprime en pantalla el cuadrado de los números del 1 al 50, ambos incluidos.
            Usa la estructura while. Devuelve en pantalla la suma total.
        */

        $num = 1;
        $acumulado = 0;

        while ($num <= 50) {
            $calculo = $num ** 2;
            echo $num . " ^ 2 = " . $calculo;
            $acumulado += $calculo; 
            echo "<br>";
            $num++;
        }

        echo "<br>";
        echo "La suma total es: " . $acumulado;
    
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <style>
        .cuadrado {
            height: 20px;
            width: 20px;
        }
    </style>
</head>
<body>
    
    <?php

        /*
            Código PHP que dibuja 100 cuadrados en la pantalla usando colores
            aleatorios.
        */

        $colores = ["red", "blue", "green", "yellow", "orange", "gray", "black", "pink", "brown"];
        
        for ($i=1; $i<=100; $i++) { 
            echo "<div class='cuadrado' style='background-color: " . $colores[rand(0, 8)] . ";'></div>";
            echo "<p> </p>";
        }

        
    ?>
</body>
</html>
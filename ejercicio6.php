<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    
        /*
            Crea un array con los meses del año. Imprímelos en pantalla ordenados de
            alfabéticamente.
        */

        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        sort($meses);

        for ($i=0; $i<=11; $i++) { 
            echo $meses[$i];
            echo "<br>";
        }

    ?>
</body>
</html>
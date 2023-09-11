<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Tarea N° 1</h1>
    <?php
    //Ejercicio 1//
    echo "Hola mundo!";
    echo "<br>";
    //Ejercicio 2//
    $saludo = "Hola mundo!";
    echo $saludo;
    echo "<br>";
    //Ejercicio 3//
    $num1=50;
    $num2=8;
    $suma= $num1+$num2;
    echo "la suma es :$suma";
    echo "<br>";
    $resultado = $num1*$num2;
    echo "el resultado es: $resultado";
    echo "<br>";
    $resta= $num1-$num2;
    echo "la resta es: $resta";
    echo "<br>";
    $dividir= $num1 / $num2;
    echo "La division es: $dividir";
    echo "<br>";
    $resto = $num1 % $num2;
    echo "El resto es: $resto";
    echo "<br>";
    //Ejercicio 4//
    $celcius=20;
    $celciusFahrenheit =($celcius*9/5)+32;
    echo "La conversión de $celcius grados Celsius a Fahrenheit es: $celciusFahrenheit grados Fahrenheit";
    echo "<br>";
    //Ejercicio 5//
    //Area del rectángulo//

    $base=18;
    $altura=12;
    $areaRectangulo = $base * $altura;
    echo "el área del rectángulo es: $areaRectangulo";
    echo "<br>";
    //Area y Perímetro del círculo//
    $pi=3.1416;
    $radio=30;
    $areaCirculo= $pi*($radio*$radio);
    $perimetro= 2*$pi*$radio;
    echo "El área del círculo es: $areaCirculo, y su perímetro es: $perimetro";
     ?>

  </body>
</html>

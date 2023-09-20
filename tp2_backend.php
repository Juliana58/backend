<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarea N° 3 BackEnd</title>
  </head>
  <body>

    <h1>EJERCICIOS</h1>
    <?php
    //ejercicio 1
    $a=8;
    if($a >0){
      echo "El número $a es positivo";
    }
    echo "<br>";
    //ejercicio 2
    $mayor= 20;
    $menor=8;
    if ($mayor >1 & $menor<10) {

      echo "El número $mayor es mayor a 1 y el número $menor es menor a 10";
    }
    echo "<br>";

    //ejercicio 3

    $num1= 0;
    $num2= 1;
    if ($num1>10 || $num2<2) {
      echo "Se cumple la condición exigida";
    } else {
      echo "No se cumple la condicion";
    }
    echo "<br>";

    //Ejercicio 4

    $numero1= 2;
    $numero2= 10;
    if ($numero1>$numero2) {
      echo "La suma es:",$numero1+$numero2;
      echo "<br>";
      echo "La resta es:",$numero1-$numero2;
    } elseif ($numero2>$numero1) {
      echo "La multiplicación es:",$numero1*$numero2;
      echo "<br>";
      echo "La división es:", $numero1/$numero2;
      echo "<br>";
      echo "El resto es:",$numero1%$numero2;
      echo "<br>";
    } else {
      echo "Los Números son iguales";
    }

    ?>




  </body>
</html>

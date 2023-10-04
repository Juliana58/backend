<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>TAREA N° 4</h1>
    <?php
    //Ejercicio 1//
    echo "Ejercicio 1";
    for ($i=1; $i <= 100; $i++) {
      print "<p>$i</p>\n";
    }
    echo "<br>";

   //Ejercicio 2//
   echo "Ejercicio 2";
    for ($i=100; $i >=1; $i--){
      print "<p>$i</p>\n";
    }
    echo "<br>";
   //ejercicio 3 N° pares//
   echo "N° Par","<br>";
    for($i=0; $i<=100; $i= $i+2){
      echo $i."</br>";
   }
   //ejercicio 4 N° impares//
   echo "N° impar";
   for ($i=1; $i <= 100; $i= $i+2){
     echo "<p>$i</p>\n";
   }
   //ejercicio 5//
   echo "suma","<br>";
   $suma=0;
   for($i=0;$i <=20;$i++){
   $suma +=$i;
   echo $suma."</br>";
 }
   //ejercicio 6//
   echo "Suma Pares","<br>";
   $par=0;
   //for ($i=1;$i <=20;$i++){
    // if ($i%2==0){
      // $par=$par+$i;
    // }
     //echo $par."</br>";
  // }
  $i=2;
  while ($i <= 20) {
    $par+=$i ;
    $i+=2;
  }
   echo $par."<br>";

     ?>

  </body>
</html>

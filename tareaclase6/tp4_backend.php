<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<h1>Números Pares</h1>\n";
    $numeropar= [0,2,4,6,8,10,12,14,16,18];
    foreach ($numeropar as $valor) {
      print "<p>$valor</P>\n";
    };
    echo "<h1>Ejercicio 2</h1>\n";
    $datos = ["Pedro","Ana",34,1];
    print_r($datos);

    echo "<br>";
    echo "<h1>Ejercicio 4: <br> Datos Ingresados</h1>";
    echo "<br>";
    $datosdetallados= [
      "Nombre" => "Pedro",
      "Apellido" => "Torres",
      "Direcion" => "Av. Mayor 3703",
      "Telefono" => 1122334455,
    ];
    print_r($datosdetallados);
      echo "<br>";

   print "<h1>Ejercicio 5</h1>\n";
    $ciudades=["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
    foreach ($ciudades as $i => $valor) {
      print "<pre>\n";
      print "La ciudad con el indice $i es $valor";
      print "<pre>\n";
    }

    print "<pre>\n";
    print "<h1>Ejercicio 6</h1>\n";
    $ciudad=["MD"=> "Madrid","BCL"=> "Barcelona","LD"=>"Londres","NY"=>"New York","LA"=>"Los Angeles","CCG"=>"Chicago"];
    foreach ($ciudad as $corto => $valor) {
    print "<pre>\n";
    print "El indice de $valor es => $corto";

    }
  ?>

  </body>
</html>

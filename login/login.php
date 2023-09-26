<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "admin";
$ckpass= 2023;
if ($usuario==$ckusuario && $contrasenia==$ckpass) {
  // code...
  echo "Los datos son correctos!";
  header ("location:https://shop.samsung.com/ar");
}else {
  echo "Error";
  header ("location:https://www.dropbox.com/error");
}

 ?>

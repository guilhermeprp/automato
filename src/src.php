<?php

echo "Digite seu email: ";
$email = trim(fgets(STDIN, 1024));

echo "Digite seu CPF: ";
$entrada2 = trim(fgets(STDIN, 1024));

echo "Digite a placa do seu veículo: ";
$placa = trim(fgets(STDIN, 1024));

if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
  echo ("Email válido\n");
} else {
  echo ("Email inválido\n");
}

$cpf = $entrada2;
$cpf = str_replace(".", "", $cpf);
$cpf = str_replace("-", "", $cpf);

if (preg_match('/^[0-9]{11}$/', $cpf)) {
  echo ("CPF válido\n");
} else {
  echo ("CPF inválido\n");
}


if (preg_match('/^[A-Za-z]{3}-[0-9]{4}$/', $placa)) { 
  echo ("Placa válida\n");
} else {  
  echo ("Placa inválida\n");};
?>

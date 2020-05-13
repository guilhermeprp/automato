<?php

echo "Digite seu email: ";

$email = trim(fgets(STDIN, 1024));

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo ("Email válido\n");
} else {
  echo ("Email inválido\n");
}

echo "Digite seu CPF: ";
$entrada2 = trim(fgets(STDIN, 1024));
$cpf = $entrada2;
$cpf = str_replace(".", "", $cpf);
$cpf = str_replace("-", "", $cpf);

if (preg_match('/^[0-9]{11}$/', $cpf)) {
  echo ("CPF válido\n");
} else {
  echo ("CPF inválido\n");
}

echo "Digite seu a placa do seu veículo: ";
$placa = trim(fgets(STDIN, 1024));

if (preg_match('/[A-Za-z]{3}-[0-9]{4}/', $placa)) { 
  echo ("Placa válida\n");
} else {  
  echo ("Placa inválida\n");};
?>
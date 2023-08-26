<?php

require './processamento.php';

$calculadora1 = new Calculadora();

$calculadora1->Multiplicar(5);
$calculadora1->Multiplicar(0);
echo $calculadora1->GetRes();

$calculadora1->Multiplicar(5);
echo $calculadora1->GetRes();

echo $calculadora1->GetMem();
echo $calculadora1->Zerar();
echo $calculadora1->GetMem();












?>
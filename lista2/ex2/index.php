<?php

require './processamento.php';

$calculadora1 = new Calculadora();

echo 'Eu sou a calculadora! <br> <br>';
$calculadora1->Somar(5);
$calculadora1->Multiplicar(5);
echo '5 x 5 = '. $calculadora1->GetRes().'<br>';
$calculadora1->Multiplicar(5);
echo '25 x 5 = '. $calculadora1->GetRes() .'<br>';
$calculadora1->Multiplicar(5);
echo '125 x 5 = '. $calculadora1->GetRes().'<br>';
$calculadora1->Subtrair(5);
echo '625 - 5 = '. $calculadora1->GetRes().'<br>';
$calculadora1->Dividir(10);
echo '620 / 5 = '. $calculadora1->GetRes().'<br>';
$calculadora1->Potenciar(2);
echo '62 ** 5 = '. $calculadora1->GetRes().'<br>';
$calculadora1->Raiz();
echo 'Raiz de 3844 = '. $calculadora1->GetRes().'<br>';
$calculadora1->Porcentagem(50);
echo '50% de 62 = '. $calculadora1->GetRes().'<br>';
echo '<br>';

echo 'Memória (último valor): ' .$calculadora1->GetMem() .'<br>';
echo $calculadora1->Zerar();
echo 'A calculadora foi zerada! <br>';
echo 'Valor final: ' .$calculadora1->GetMem() .'<br>';












?>
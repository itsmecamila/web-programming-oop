<?php

require './processamento.php';
$data1 = new Data(31,12,2023);
$data2 = new Data(31,12,2024);
$data3 = new Data(1,12,2023);
$data4 = new Data(1,12,2023);
$data5 = new Data(1,1,2023);
$data6 = new Data(1,1,2200);

echo $data5->IntervaloDeDias($data6). '<br>';
echo '<br>';

if($data1 ->ehBissexto($data1->GetAno()) == false){
    echo '2023 não é um ano bissexto. <br>';
}

echo '<br>';

if($data2 ->ehBissexto($data2->GetAno()) == true){
    echo '2024 é um ano bissexto. <br>';
}

echo '<br> Data 1: '.$data1->GetData(). '<br>';
echo '<br> Data 2: '.$data2->GetData(). '<br>';
echo '<br> Intervalo de dias: ' . $data1->IntervaloDeDias($data2). '<br>';
$data1->AvancarDia();
echo '<br> Data 1 (avançada): '. $data1->GetData(). '<br>';
echo '<br> Intervalo de dias: ' . $data1->IntervaloDeDias($data2). '<br>';
$data1->VoltarDia();
echo '<br> Data 1 (voltar): '. $data1->GetData(). '<br>';
echo '<br> Intervalo de dias: ' . $data1->IntervaloDeDias($data2). '<br>';

echo '<br>' .$data3->CompararDatas($data4);
echo '<br>';
echo '<br>' .$data1->QuantosDiasTemEsseMes($data1->GetMes(),$data1->GetAno());

?>
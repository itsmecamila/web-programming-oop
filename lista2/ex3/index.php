<?php

session_start();
require "./processamento.php";

$carro = new Carro();

echo 'Combustível inicial: ' . $carro->GetCombustivel(). '<br>';

$abasteceu = $carro->SetCombustivel(100) ;
if($abasteceu == true){
    echo 'Carro abastecido com: '.$_SESSION['litrosAbastecidos'] .' litros <br>';
}

$andou = $carro->Andar(80);
if($andou == true){

    echo 'Carro andou: ' .$_SESSION['distancia']. ' km<br>';
}

echo 'Combustível final: '. $carro->GetCombustivel() . '<br>';
?>
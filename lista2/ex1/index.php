<?php

require './processamento.php';

$retangulo2 = new Retangulo(12,10);
$areaRet2 = $retangulo2->calcularArea();
$perimetroRet2 = $retangulo2->calcularPerimetro();
$ehQuadradoRet2 = $retangulo2->ehQuadrado();


$retangulo1 = new Retangulo();
$areaRet1 = $retangulo1->calcularArea();
$perimetroRet1 = $retangulo1->calcularPerimetro();
$ehQuadradoRet1 = $retangulo1->ehQuadrado();


if($ehQuadradoRet1 == true){
    echo 'Retângulo 1 <br>';
    echo 'É um quadrado <br>';
}
else{
    echo 'Retângulo 1 <br>';
    echo 'Não é um quadrado <br>';
}

echo 'Altura: ' .$retangulo1->getAltura(). '<br>';
echo 'Largura: ' .$retangulo1->getLargura(). '<br>';
echo 'Área: ' . $areaRet1 . '<br>';
echo 'Perímetro: ' . $perimetroRet1 . '<br>';


if($ehQuadradoRet2 == true){
    echo '<br>';
    echo 'Retângulo 2 <br>';
    echo 'É um quadrado <br>'; 
}

else{
    echo '<br>';
    echo 'Retângulo 2 <br>';
    echo 'Não é um quadrado <br>';
}

echo 'Altura: ' .$retangulo2->getAltura().'<br>';
echo 'Largura: ' .$retangulo2->getLargura().'<br>';
echo 'Área: ' . $areaRet2 . '<br>';
echo 'Perímetro: ' . $perimetroRet2;
?>

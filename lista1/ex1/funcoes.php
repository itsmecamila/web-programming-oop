<?php

function AreaCirculo($raio){
    return M_PI * ($raio ** 2);
}

function AreaTriangulo($baseT,$alturaT){
    return ($baseT * $alturaT) / 2;
}

function AreaQuadrado($ladoQ){
    return ($ladoQ ** 2);
}

function AreaRetangulo($baseR,$alturaR){
    return ($baseR * $alturaR);
}

?>
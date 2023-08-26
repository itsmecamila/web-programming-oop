<?php

session_start();

if(!empty($_POST['peso'])){
    $peso = intval($_POST['peso']);
    $multa = 0;
    $_SESSION['peso'] = $peso;

    if($peso > 50){
        $qtdexcecida = ($peso - 50) - (($peso - 50) * 0.8);  

        $multa = 4 * ceil($qtdexcecida); 
        $_SESSION['multa'] = $multa;
    }
}

header("Location: ./index.php");
die();

?>
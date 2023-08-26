<?php

session_start();

if(!empty($_POST['emprestimo']) && !empty($_POST['juros']) && !empty($_POST['parcelas'])){
    $emprestimo = floatval($_POST['emprestimo']);
    $juros = floatval($_POST['juros']);
    $parcelas = intval($_POST['parcelas']);
    
    $saldo = $emprestimo;
    $totaljuros = 0;
    $p = $emprestimo * ((($juros / 100) * (1 + $juros/100) ** $parcelas) / ((1 + $juros / 100) ** $parcelas - 1));
    $matriz = [];
    
    $_SESSION['emprestimo'] = $emprestimo;
    $_SESSION['juros'] = $juros;
    $_SESSION['parcelas'] = $parcelas;

    for($i = 0; $i < $parcelas; $i++){
        $jurosparcela = $saldo * ($juros/100);
        $amortizacao =  $p - $jurosparcela;
        $saldo = max($saldo - $amortizacao,0);  
        $totaljuros = $jurosparcela + $totaljuros;
        $linha = [$i + 1,number_format($p,2),number_format($amortizacao,2),number_format($jurosparcela,2),number_format($saldo,2)];
        array_push($matriz,$linha);
        echo 'aaa';
    }

    $_SESSION['matriz'] = $matriz; 
    $_SESSION['totalJuros'] = number_format($totaljuros,2);
}

header("Location: ./index.php");
die();
?>
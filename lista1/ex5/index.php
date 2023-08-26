<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Price</title>
</head>
<body>
    <form method="POST" action="./processamento.php">
        <label for="emprestimo">Valor do empréstimo: </label>
        
        <input type="text" name="emprestimo" id="emprestimo" placeholder="Digite o valor...">
        <br><br>
        <label for="juros">Juros:</label>
        <input type="text" name="juros" id="juros" placeholder="Digite o juros...">
        <br><br>
        <label for="parcelas">Parcelas:</label>
        <input type="text" name="parcelas" id="parcelas" placeholder="Digite a quantia de parcelas...">

        <button type="submit">Calcular</button>
    </form>

    <p>----------------------------------------------------------------------------------------------------------</p>
    <p>Amortização no sistema Francês de Amortização (Tabela Price)</p>
    <p>----------------------------------------------------------------------------------------------------------</p>
    
    <?php

    echo '<p> Montante financiado: ' . $_SESSION['emprestimo']. '</p>';
    echo '<p> Juros financiamento: ' . $_SESSION['juros']. '</p>';
    echo '<p> Número de parcelas: ' . $_SESSION['parcelas']. '</p>';    
    
    ?>

    <p>----------------------------------------------------------------------------------------------------------</p>
    

    <table>
        <tr>
            <th>Parcela</th>
            <th>Valor Parcela</th>
            <th>Amortização</th>
            <th>Juros</th>
            <th>Saldo Devedor</th>
        </tr>

        <?php
    
        if(!empty($_SESSION['matriz']) && !empty($_SESSION['totalJuros'])){
            foreach ($_SESSION['matriz'] as $linha) {
                echo '<tr>';
                foreach ($linha as $l){
                    echo '<th>' .$l. '</th>';
                }
                echo '</tr>';
            }
        }
        ?>
    
    </table>
   
    <p>----------------------------------------------------------------------------------------------------------</p>
    
    <?php
    if(!empty($_SESSION['totalJuros'])){
        echo 'Total de juros pago: ' . $_SESSION['totalJuros'];
    }
    ?>
    
</body>
</html>
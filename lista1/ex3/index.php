<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço de custo</title>
</head>
<body>
    <form method="POST" action="./processamento.php">
        <label for="precovenda">Preço de venda:</label>
        <input type="text" name="precovenda" id="precovenda" placeholder="Digite o preço de venda">
        
        <label for="porc">Porcentagem de lucro:</label>
        <input type="text" name="porc" id="porc" placeholder="Digite a porcentagem de lucro">
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    
    if(!empty($_SESSION['custo']) && !empty($_SESSION['pv']) && !empty($_SESSION['pc'])){
        echo '<br>';
        echo 'Preço de venda: ' . $_SESSION['pv'] . '<br>';
        echo 'Porcentagem de lucro: '. $_SESSION['pc'] . '<br>';
        echo 'Preço de custo: ' . $_SESSION['custo'];
    }
    
    ?>
    
</body>
</html>
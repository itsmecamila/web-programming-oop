<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Números</title>
</head>
<body>
    <form action="./processamento.php" method="POST">
        <label for="numero">Número:</label>
        <input type="text" name="numero" id="numero" placeholder="Digite um número inteiro ">

        <button type="submit">Calcular</button>
    </form>

    <?php
    if(!empty($_SESSION['resultado'])){
        echo '<br>';
        echo 'Número digitado: ' . $_SESSION['n'];
        echo '<br>';
        echo 'O resultado da soma dos elementos é: ' .$_SESSION['resultado'];
    }    
    ?>
    
</body>
</html>
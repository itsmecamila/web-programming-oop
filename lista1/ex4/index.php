<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa da Pescaria</title>
</head>
<body>
    <form  method="POST" action="./processamento.php">
    <label for="peso">Informe o peso do peixe:</label>
    <input type="text" name="peso" id="peso" placeholder="Digite o peso do peixe...">

    <button type="submit">Calcular</button>
    </form>

    <?php

    if(!empty($_SESSION['multa']) && !empty($_SESSION['peso'])){
        echo '<br>';
        echo 'Peso: ' .$_SESSION['peso'] . '<br>';
        echo 'Multa: ' . $_SESSION['multa'];
    }

    ?>
    
</body>
</html>
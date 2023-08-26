<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" action="./processamento.php">
    <p>----------------------------------------------------------------------------------------------------------</p>
    <p>Área do círculo: </p>

    <label for="raio">Raio:</label>
    <input id="raio" name="raio" type="text" placeholder="Digite o raio">

    <button type="submit">Calcular</button>

    </form>

    <?php
    if(!empty($_SESSION['areaCirculo'])){
        echo '<br>';
        echo 'A área do círculo é: ' . $_SESSION['areaCirculo'];
    }
    ?>

    <form method="POST" action="./processamento.php">
    <p>----------------------------------------------------------------------------------------------------------</p>
    <p>Área do triângulo: </p>

    <label for="base">Base:</label>
    <input id="baseT" name="baseT" type="text" placeholder="Digite a base">

    <label for="altura">Altura:</label>
    <input id="alturaT" name="alturaT" type="text" placeholder="Digite a altura">

    <button type="submit">Calcular</button>

    </form>
    
    <?php
    if(!empty($_SESSION['areaTriangulo'])){
        echo '<br>';
        echo 'A área do triângulo é:  ' . $_SESSION['areaTriangulo'];
    }
    ?>

    <form method="POST" action="./processamento.php">
    <p>----------------------------------------------------------------------------------------------------------</p>
    <p>Área do quadrado: </p>

    <label for="lado">Lado:</label>
    <input id="lado" name="lado" type="text" placeholder="Digite o lado">

    
    <button type="submit">Calcular</button>
    </form>

    <?php
    if(!empty($_SESSION['areaQuadrado'])){
        echo '<br>';
        echo 'A área do quadrado é: ' . $_SESSION['areaQuadrado'];
    }
    ?>

    <form method="POST" action="./processamento.php">
    <p>----------------------------------------------------------------------------------------------------------</p>
    <p>Área do retângulo: </p>
    <label for="baseR">Base:</label>
    <input id="baseR" name="baseR" type="text" placeholder="Digite a base">

    <label for="alturaR">Altura:</label>
    <input name="alturaR" id="alturaR" type="text" placeholder="Digite a altura">
    
    <button type="submit">Calcular</button>

    </form>

    <?php
    if(!empty($_SESSION['areaRetangulo'])){
        echo '<br>';
        echo 'A área do retângulo é: ' . $_SESSION['areaRetangulo'];
    }
    ?>
    <p>----------------------------------------------------------------------------------------------------------</p>

</body>
</html>










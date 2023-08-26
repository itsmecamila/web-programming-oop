<?php

session_start();

require './funcoes.php';

if(isset($_POST["raio"])){
    $raioCirculo = $_POST["raio"];
    $resultado = AreaCirculo($raioCirculo);

    if(!empty($resultado)){
        $_SESSION['areaCirculo'] = $resultado;
    }
}

else if(isset($_POST["baseT"]) && isset($_POST["alturaT"])){
    $base = $_POST["baseT"];
    $altura = $_POST["alturaT"];

    $resultado = AreaTriangulo($base,$altura);

    if(!empty($resultado)){
        $_SESSION['areaTriangulo'] = $resultado;
    }

}

else if(isset($_POST["lado"])){

    $lado = $_POST["lado"];

    $resultado = AreaQuadrado($lado);

    if(!empty($resultado)){
        $_SESSION['areaQuadrado'] = $resultado;
    }
}

else if(isset($_POST["baseR"]) && isset($_POST["alturaR"])){

    $base = $_POST["baseR"];
    $altura = $_POST["alturaR"];

    $resultado = AreaRetangulo($base,$altura);

    if(!empty($resultado)){
        $_SESSION['areaRetangulo'] = $resultado;
    }
}

    header("Location: ./index.php");
    die();

?>
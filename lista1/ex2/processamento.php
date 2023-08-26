<?php

session_start();

if(!empty($_POST['numero'])){
    $numero = $_POST['numero'];
    $_SESSION['n'] = $numero;
    $_SESSION['resultado'] = 0;


    foreach(str_split($numero) as $i){
        $_SESSION['resultado'] = intval($i) + $_SESSION['resultado'];
       
    }
}

header("Location: ./index.php");
die();

?>
<?php

session_start();

if(!empty($_POST['precovenda']) && !empty($_POST['porc'])){
    $pv = intval($_POST['precovenda']);
    $pc = intval($_POST['porc']);

    $_SESSION['pv'] = $pv;
    $_SESSION['pc'] = $pc;

    $_SESSION['custo'] = $pv / (1 + ($pc / 100));
}

header("Location: ./index.php");
die();
?>
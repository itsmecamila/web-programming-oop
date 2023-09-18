<?php
    require './processamento.php';
    require './data.php';
    $data = new Data(10,10,2010);
    $voo1 = new Voo(1,$data);

    echo 'Voo: '. $voo1->GetVoo() .'<br>';

    if($voo1->VerificaSeAssentoEstaOcupado(45) == false){
        echo 'Assento 45 está livre. <br>';

    }

    if($voo1->Ocupar(45) == true){
        echo 'Assento reservado para você. <br>';
    }
    else{
        echo 'Assento já reservado. Escolha outro. <br>';
    }
    
    if($voo1->Ocupar(50) == true){
        echo 'Assento reservado para você. <br>';
    }
    else{
        echo 'Assento já reservado. Escolha outro. <br>';
    }


    if($voo1->Ocupar(1) == true){
        echo 'Assento reservado para você. <br>';
    }
    else{
        echo 'Assento já reservado. Escolha outro. <br>';
    }

    echo 'Assento livre: '.$voo1->GetProximoAssento() .'<br>';
    echo 'Vagas livres: '. $voo1->GetVagas(). '<br>';
    echo 'Data voo: '. $voo1->GetDataVoo();
    
?>
<?php

class Voo{
    private $passageiros = array();
    private $numero_voo;
    private $data;

    public function __construct($numero_voo, $data) {
        $this->numero_voo = $numero_voo;
        $this->data = $data;
        $this->passageiros = array_fill(0,100,true);
    }

    public function GetProximoAssento(){
        for($i = 1; $i <= 100; $i ++){
            if($this->passageiros[$i - 1] == true){
                return $i;
            }
        }        
    }

    public function VerificaSeAssentoEstaOcupado($num){
        return !$this->passageiros[$num - 1];
    }

    public function Ocupar($num){
        if(!$this->VerificaSeAssentoEstaOcupado($num)){
            $this->passageiros[$num - 1] = false;
            return true;
        }
        else{
            return false;
        }
    }

    public function GetVagas(){
        $disponiveis = 0;
        for($i = 0; $i < 100; $i++){
            if($this->passageiros[$i] == true){
                $disponiveis += 1;
            }
        }
        return $disponiveis;
    }

    public function GetVoo(){
        return $this->numero_voo;
    }

    public function GetDataVoo(){
        return $this->data->GetData();
    }
}
?>
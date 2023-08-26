<?php

session_start();

class Carro{

    private $combustivel;
    private $consumo;

    public function __construct(){
        $this->combustivel = 0;
        $this->consumo = 1;
    }

    public function Andar($distancia) : bool{
            $gasto = $distancia / $this->consumo;
            $_SESSION['distancia'] = $distancia;
            if($gasto <= $this->combustivel){
               $this->combustivel -= $gasto;
               return true;
            }
            return false;
        }

    public function GetCombustivel() : float {
        return $this->combustivel;
    }

    public function SetCombustivel($litros) : bool {
        if($litros > 0){
            $_SESSION['litrosAbastecidos'] = $litros;
            $this->combustivel += $litros;
            return true;
        }
    }
}












?>
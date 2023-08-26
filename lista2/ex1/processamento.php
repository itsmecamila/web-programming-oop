<?php

class Retangulo{
    private $largura;
    private $altura;

    public function __construct($altura = 1,$largura = 1)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }


    public function calcularPerimetro(){
        return 2 * ($this->largura + $this->altura);
    }

    public function calcularArea(){
        return $this->largura * $this->altura;
    }

    public function ehQuadrado(){
        if($this->altura == $this->largura){
            return true;
        }

        return false;
    }

    public function setLargura($largura){
        if(!empty($largura)){
            $this->largura = $largura;
        }
    }

    public function setAltura($altura){
        if(!empty($altura)){
            $this->altura = $altura;
        }
    }

    public function getLargura(){
        return $this->largura;
    }

    public function getAltura(){
        return $this->altura;
    }


}













?>
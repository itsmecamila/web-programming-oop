<?php

 class Calculadora{
    private $res;
    private $mem;


    public function __construct(){
        $this->res = 0;
        $this->mem = 0;        
    }

    public function Zerar() : void {
        $this->res = 0;
        $this->mem = 0;
    }

    public function Desfaz() : void {
        $this->res = $this->mem;
    }

    public function GetRes() : float {
        return $this->res;
    }

    public function GetMem() : float{
        return $this->mem;
    }

    public function Somar($n) : void{
        $this->mem = $this->res;
        $this->res = $n + $this->res;
    }

    public function Subtrair($n) : void{
        $this->mem = $this->res;
        $this->res = $this->res - $n;
    }

    public function Multiplicar($n) : void{
        if($this->res == 0){
            $this->res = $n;
            return;
        }

        $this->mem = $this->res;
        $this->res = $this->res * $n;
    }

    public function Dividir($n) : void {
        $this->mem = $this->res;
        $this->res = $this->res / $n;
    }

    public function Potenciar($n) : void {
        $this->mem = $this->res;
        $this->res = $this->res ** $n;
    }

    public function Porcentagem($n) : void {
        $this->mem = $this->res;
        $this->res = $this->res * ($n / 100);
    }

    public function Raiz() : void {
        $this->mem = $this->res;
        $this->res = sqrt($this->res);
    }
}

?>
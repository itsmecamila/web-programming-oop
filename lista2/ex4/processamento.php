<?php

class Data{
    private $dia;
    private $mes;
    private $ano;
    
    public function __construct($dia = 0, $mes = 0, $ano = 0 ){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function GetData() : string{
        return $this->dia .'/'.$this->mes.'/'.$this->ano;
    }

    public function GetDia() : int{
        return $this->dia ;
    }

    public function GetMes() : int{
        return $this->mes;
    }

    public function GetAno() : int {
        return $this->ano;
    }

    public function SetDia($dia) : bool {
        $qtdDias = $this->QuantosDiasTemEsseMes($this->mes,$this->ano);
        if($dia > 0 && $dia <= $qtdDias){
            $this->dia = $dia;
            return true;
        }
        return false;
    }

    public function SetMes($mes) : bool {
        $qtdDias = $this->QuantosDiasTemEsseMes($mes,$this->ano);
        if($mes > 0 && $this->dia > 0 && $this->dia <= $qtdDias){
            $this->mes = $mes;
            return true;
        }
        return false;
    }

    public function SetAno($ano) : bool {
        if($ano > 0){
            if($this->ehBissexto($this->ano) && !$this->ehBissexto($ano)){
                if($this->mes == 2 && $this->dia == 29){
                    return false;
                }
            }
            $this->ano = $ano;
            return true;
    }
}

    public function ehBissexto($ano) : bool {
        return $ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0);
    }

    public function AvancarDia() : void {
        $TotalDias = $this->QuantosDiasTemEsseMes($this->mes,$this->ano);

        if($this->dia < $TotalDias){
            $this->dia += 1;
        }

        else if($this->dia == $TotalDias && $this->mes != 12){
            $this->dia = 1;
            $this->mes += 1;
        }

        else if($this->dia == 31 && $this->mes == 12){  
            $this->dia = 1;
            $this->mes = 1;
            $this->ano  += 1;
        }
}

    public function VoltarDia() :  void{
        $MesAntecessor = ($this->mes == 1) ? 12 : ($this->mes - 1);
        $UltimoDiaMesAntecessor = $this->QuantosDiasTemEsseMes($MesAntecessor,$this->ano);

            if($this->dia == 1){
                $this->dia = $UltimoDiaMesAntecessor;
                $this->mes = $MesAntecessor;

                if($MesAntecessor == 12){
                    $this->ano -= 1;
                }
            }

            else{
                $this->dia -= 1;
            }
    }

    public function IntervaloDeDias($data): int{
            $numeroDoDiaLimiteEmRelacaoAoTotalDeDiasDoAno = 0;
            $numeroDoDiaAtualEmRelacaoAoTotalDeDiasDoAno = 0; 
            
            for($i = 1; $i <= $this->mes - 1; $i++){
                $numeroDoDiaAtualEmRelacaoAoTotalDeDiasDoAno += $this->QuantosDiasTemEsseMes($i,$this->ano);
            }

            $numeroDoDiaAtualEmRelacaoAoTotalDeDiasDoAno += $this->dia;

            for($i = 1;$i <= $data->GetMes() - 1; $i++){
                $numeroDoDiaLimiteEmRelacaoAoTotalDeDiasDoAno += $this->QuantosDiasTemEsseMes($i,$data->GetAno());
                
            }

            $numeroDoDiaLimiteEmRelacaoAoTotalDeDiasDoAno += $data->GetDia();

            if($data->GetAno() == $this->ano){
                return abs($numeroDoDiaAtualEmRelacaoAoTotalDeDiasDoAno - $numeroDoDiaLimiteEmRelacaoAoTotalDeDiasDoAno);
            }

            $dias = 0;

            if($data->GetAno() !=  $this->ano){
                if($this->ehBissexto($this->ano)){
                    $dias =  366 - $numeroDoDiaAtualEmRelacaoAoTotalDeDiasDoAno;
                }
                else{
                    $dias = 365 - $numeroDoDiaAtualEmRelacaoAoTotalDeDiasDoAno;
                }

                if(abs($data->GetAno() - $this->ano) >= 2){
                    if($this->ano > $data->GetAno()){
                        for ($i = $data->GetAno() + 1; $i < $this->ano; $i ++){
                            if($this->ehBissexto($i)){
                                $dias += 366;
                            }
                            else{
                                $dias += 365;
                            }
                        }
                    }
                    else if($data->GetAno() > $this->ano){
                        for ($i = $this->ano + 1; $i < $data->GetAno(); $i ++){
                            if($this->ehBissexto($i)){
                                $dias += 366;
                            }
                            else{
                                $dias += 365;
                            }
                        }
                    }
                }
            }

            return $dias + $numeroDoDiaLimiteEmRelacaoAoTotalDeDiasDoAno;
        }

        public function CompararDatas($data) :int{
            if($data->GetDia() == $this->dia && $data->GetMes() == $this->mes && $data->GetAno() == $this->ano){
                return 0;
            }

            else if($this->dia > $data->GetDia() || $this->mes > $data->GetMes() || $this->ano > $data->GetAno()){
                return 1;
            }

            else if($data->GetDia() > $this->dia || $data->GetMes() > $this->mes || $data->GetAno() > $this->ano){
                return -1;
            }

        }

    public function QuantosDiasTemEsseMes($mes,$ano) : int{

        $mesesComTrintaDias = [4,6,9,11];
        $mesesComTrintaEUmDias = [1,3,5,7,8,10,12];

        if(in_array($mes,$mesesComTrintaDias,true)){
            return 30;
        }

        else if(in_array($mes, $mesesComTrintaEUmDias,true)){
            return 31;
        }

        else if($mes == 2){
            if($this->ehBissexto($ano)){
                return 29;
            }
            else{
                return 28;
            }
        }
    }
}  
?>
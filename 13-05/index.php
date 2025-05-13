<?php 
class carro{
private$modelo ;
private$cor;
private$ano;

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setCor($cor){
     $this->cor = $cor;    
    }
    public function setano($ano){
        $this->ano = $ano;
    }
    public function getmodelo($modelo){
     return $this->modelo; 
    }
    public function getCor($cor){
        return $this->cor;
    }
    public function getano($ano){
        return $this->ano;
    }
    public function __construct($modelo, $cor, $ano){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }
    public function mostracarro(){
       echo"o carro é : <br>";
       echo"o modelo é :". $this-> modelo;
       echo"<br> a cor é: ". $this->cor;
       echo"<br>o ano do carro é: ". $this->ano;
        
    }    

}
$carro1 = new carro("civic","azul royal","2002");
$carro1->mostracarro();

























?>
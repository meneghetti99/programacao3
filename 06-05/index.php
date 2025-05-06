<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirinformacoes() {
        echo "<strong>Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->quantidade . "<br></strong>";
    }

    public function calcularMediaPreços($produto1, $produto2) {
        $media = ($produto1->preco + $produto2->preco) / 2;
        return $media;
    }
}  
$produto1 = new Produto();
$produto1->nome = "caneta preta";
$produto1->preco = "5.00";
$produto1->quantidade = 5;
$produto1->exibirinformacoes();
$produto2 = new Produto();
$produto2->nome = "caneta azul";
$produto2->preco = "3.00";
$produto2->quantidade = 10;
$produto2->exibirinformacoes();

$mediaPrecos = $produto1->calcularMediaPreços($produto1, $produto2);
echo "Média dos preços: " . $mediaPrecos . "<br>";


 function calcularMediaPreços($produto1, $produto2) {
    $media = ($produto1->preco + $produto2->preco) / 2;
    return $media;
}
?>
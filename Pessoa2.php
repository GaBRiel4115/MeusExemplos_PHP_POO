<?php
class Pessoa{
    
    private $nome;   //variavel privada
    
    public function __construct($tmpNome)//Definir um nome diretamente na chamada
    {
        $this->nome = $tmpNome; // puxando de construct.php 
    }

    public function setNome($novoNome){  //setNome irá receber $novoNome
        $this->nome = $novoNome;  //pegando a variavel local e aplicando um valor
    }
    public function getNome(){
        return $this->nome; //irá retornar o nome 
    }

}
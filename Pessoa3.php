<?php
class Pessoa{
    
    protected $nome;   //variavel que permite que acesse atraves de classes que estao herdando
    
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

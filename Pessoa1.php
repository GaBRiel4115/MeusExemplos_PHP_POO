<?php
class Pessoa{
    //public
    //private - so pode ser acessada por dentro dessa class
    //protected - protegida so pode ser acessada pela classe e por classes que herdam as caracteristicas dela
    private $nome;   //variavel privada
    
    public function setNome($novoNome){  //setNome irá receber $novoNome
        $this->nome = $novoNome;  //pegando a variavel local e aplicando um valor
    }
    public function getNome(){
        return $this->nome; //irá retornar o nome 
    }
}

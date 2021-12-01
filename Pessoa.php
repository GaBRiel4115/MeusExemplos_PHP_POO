<?php
class Pessoa{
    public $nome;   //variavel publica
    public $site;
    public function falarNome(){
        echo $this->nome;  //this faz uma referencia ao OBJETO ATUAL
    }
    public function falarSite(){
        echo $this->site;
    }
}

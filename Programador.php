<?php 
class Programador extends Pessoa //obtem variaveis de PESSOA3
    {

    protected $linguagem;

    public function __construct($tmpNome, $tmpLinguagem){
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLinguagem;

    }

}

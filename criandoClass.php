<?php
/*class Pessoa{
    public $nome;               //variavel publica
    public $site;
    public function falarNome(){
        echo $this->nome;  //this faz uma referencia ao OBJETO ATUAL
    }
    public function falarSite(){
        echo $this->site;
    }
}
*/


require "Pessoa.php";
//require_once - permite que a class seja carregada uma unica VEZ


//criando OBJETO
$uma_pessoa = new Pessoa; //PALAVRA RESERVADA "NEW" CRIA-SE UMA NOVO OBJETO.]
$uma_pessoa->nome = "Gabriel";
$uma_pessoa->site = "www.gabrielsousa.com.br";
//var_dump($uma_pessoa);


//pegar info especifica de um objeto
$uma_pessoa->falarNome(); 
echo "<br/>";
$uma_pessoa->falarSite();
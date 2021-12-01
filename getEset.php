<?php
require "Pessoa1.php";
//require_once - permite que a class seja carregada uma unica VEZ


//criando OBJETO
$uma_pessoa = new Pessoa; //PALAVRA RESERVADA "NEW" CRIA-SE UMA NOVO OBJETO.]

//pegar info especifica de um objeto
$uma_pessoa->setNome("Gabriel"); 
echo $uma_pessoa->getNome();
 
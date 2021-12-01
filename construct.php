<?php
require "Pessoa2.php";

//criando OBJETO
$pessoa = new Pessoa("Gabriel"); //PALAVRA RESERVADA "NEW" CRIA-SE UMA NOVO OBJETO.
//pegar info especifica de um objeto
echo $pessoa->getNome();
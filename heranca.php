<?php
/*Herança irá herdar uma informação, atributos de outra CLASS */
require "Pessoa3.php";
require "Programador.php";

//criando OBJETO
$programador= new Programador("Gabriel", "PHP"); //PALAVRA RESERVADA "NEW" CRIA-SE UMA NOVO OBJETO.
//pegar info especifica de um objeto
echo $programador->getNome();

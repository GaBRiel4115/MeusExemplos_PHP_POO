<?php
	require_once 'Automovel.php';


	echo "Criando o objeto novoAuto...<br>";
	$novoAuto = new Automovel();

	//var_dump($novoAuto);


	echo "<br>Situação do Veículo: ";
	echo $novoAuto->consultarAuto();

	echo "<br><br>Atribuindo valor ao atributo valorLocacaoAuto...<br>";
	//$novoAuto->valorLocacaoAuto = 125.35; -->ERRO, pois o atributo valorLocacaoAuto é PRIVATE
	$novoAuto->set_valorLocacaoAuto(125.35); //Forma correta de fazer: acessar o atributo através dos métodos da classe.

	echo "<br>Situação do Veículo: ";
	echo $novoAuto->consultarAuto();

























/*

	//----------- Atribuindo valores aos atributos do objeto -------
	echo $novoAuto->set_placaAuto('LLZ8411');
	echo $novoAuto->set_renavanAuto('111111.11111.111111');
	echo $novoAuto->set_chassiAuto('222.222.222.222');
	echo $novoAuto->set_corAuto('Prata');
	echo $novoAuto->set_numeroPortasAuto(4);
	echo $novoAuto->set_tipoCombustivelAuto('Etanol e Gasolina');
	echo $novoAuto->set_quilometragemAuto(94250);
	echo $novoAuto->set_valorLocacaoAuto(125.50);


	//----------- Exibindo valores dos atributos do objeto -------
	echo "<br>";
	echo $novoAuto->get_placaAuto();
	echo "<br>";
	echo $novoAuto->get_renavanAuto();
	echo "<br>";
	echo $novoAuto->get_chassiAuto();
	echo "<br>";
	echo $novoAuto->get_corAuto();
	echo "<br>";
	echo $novoAuto->get_numeroPortasAuto();
	echo "<br>";
	echo $novoAuto->get_tipoCombustivelAuto();
	echo "<br>";
	echo $novoAuto->get_quilometragemAuto();
	echo "<br>";
	echo $novoAuto->get_valorLocacaoAuto();
	

	echo "Situação do Veículo: ";
	echo $novoAuto->consultarAuto();
	echo "<br>";

	
*/


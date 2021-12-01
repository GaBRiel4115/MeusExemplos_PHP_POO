<?php

	class Automovel{
		private $placaAuto;
		private $renavanAuto;
		private $chassiAuto;
		private $corAuto;
		private $numeroPortasAuto;
		private $tipoCombustivelAuto;
		private $quilometragemAuto;
		private $valorLocacaoAuto;
		
		//construtor da classe
		function Automovel(){
			//$this->valorLocacaoAuto=200.50;
		}

		//----------------------------------
		public function consultarAuto(){
			if ($this->valorLocacaoAuto > 0 ){
				return "Disponível para locação";
			}else{
				return "Não disponível para locação";
			}
		}

		//----- GETTERS ------
		//getPlacaAuto() --> Usando a regra de camelo
		function get_placaAuto(){
			return $this->placaAuto;
		}

		function get_renavanAuto(){
			return $this->renavanAuto;
		}

		function get_chassiAuto(){
			return $this->chassiAuto;
		}

		function get_corAuto(){
			return $this->corAuto;
		}

		function get_numeroPortasAuto(){
			return $this->numeroPortasAuto;
		}

		function get_tipoCombustivelAuto(){
			return $this->tipoCombustivelAuto;
		}

		function get_quilometragemAuto(){
			return $this->quilometragemAuto;
		}

		function get_valorLocacaoAuto(){
			return $this->valorLocacaoAuto;
		}


		//----- SETTERS ------
		function set_valorLocacaoAuto($varAux1){
			$this->valorLocacaoAuto = $varAux1;
		}


  		function set_placaAuto($varAux2){
			$this->placaAuto = $varAux2;
		}

		function set_renavanAuto($varAux3){
			$this->renavanAuto = $varAux3;
		}

		function set_chassiAuto($varAux4){
			$this->chassiAuto = $varAux4;
		}

		function set_corAuto($varAux5){
			$this->corAuto = $varAux5;
		}

		function set_numeroPortasAuto($varAux6){
			$this->numeroPortasAuto = $varAux6;
		}

		function set_tipoCombustivelAuto($varAux7){
			$this->tipoCombustivelAuto = $varAux7;
		}

		function set_quilometragemAuto($varAux8){
			$this->quilometragemAuto = $varAux8;
		}

			
	}

<?php 
    class Cliente {
        private $cpfCliente;
        private $nomeCliente;
        private $enderecoCliente;
        private $telefoneCliente;
        private $emailCliente;
    }

    function get_cpfCliente(){
        return $this->cpfCliente;
    }

    function get_nomeCliente(){
        return $this->nomeCliente;
    }

    function get_enderecoCliente(){
        return $this->enderecoCliente;
    }

    function get_telefoneCliente(){
        return $this->telefoneCliente;
    }

    function get_emailCliente(){
        return $this->emailCliente;
    }



    function set_cpfCliente($varAux1){
        $this->cpfCliente = $varAux1;
    }

    function set_nomeCliente($varAux2){
        $this->nomeCliente = $varAux2;
    }

    function set_enderecoCliente(){
        $this->enderecoCliente;
    }
    
    function set_telefoneCliente(){
        $this->telefoneCliente;
    }

    function set_emailCliente(){
        $this->get_emailCliente;
    }
    
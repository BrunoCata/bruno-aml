<?php
    class Cliente{
        private $idcliente;
        private $desnome;
        private $desemail;
        private $desendereco;
        private $dtcadastro;

        function __construct(){

        }

        function setIdCliente($idcliente){
            $this->idcliente = $idcliente;
        }

        function getIdCliente(){
            return $this->idcliente;
        }

        function setDesEmail($desemail){
            $this->desemail = $desemail;
        }

        function getDesEmail(){
            return $this->desemail;
        }

        function setDesNome($desnome){
            $this->desnome = $desnome;
        }

        function getDesNome(){
            return $this->desnome;
        }

        function setDesEndereco($desendereco){
            $this->desendereco = $desendereco;
        }

        function getDesEndereco(){
            return $this->desendereco;
        }

        function setDtCadastro($dtcadastro){
            $this->dtcadastro = $datacadastro;
        }

        function getDtCadastro(){
            return $this->dtCadastro;
        }
    }
?>
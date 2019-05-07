<?php

    abstract class Pessoa {
        
        public $codigo;
        public $nome;
        private $dataNascimento;

       public function __construct ($codigo,$nome,$dataNascimento){
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
         }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function getCodigo(){
            return $this->codigo;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        abstract public function imprimir();

        
    }
?>
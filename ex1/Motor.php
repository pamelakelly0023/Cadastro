<?php

    class Motor extends Carro{
        public $cilindro, $potencia, $giroAtual, $combustivel;

        public function setCilindro($cilindro){
            $this->cilindro = $cilindro;
        }
        public function setPotencia ($potencia){
            $this->potencia = $potencia;
        }
        public function setGiroAtual($giroAtual){
            $this->giroAtual = $giroAtual;
        }
        public function setCombustivel ($combustivel){
            $this->combustivel = $combustivel;
        }

        public function getCilindro(){
            return $this->cilindro;
        }
        public function getPotencia(){
            return $this->potencia;
        }
        public function getGiroAtual(){
            return $this->giroAtual;
        }
        public function getCombustivel(){
            return $this->combustivel;
        }

       
    }
?>
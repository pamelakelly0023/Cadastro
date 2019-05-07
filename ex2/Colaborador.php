<?php

    class Colaborador extends Pessoa{
        public $setor;
        private $dataAdmissao;
        protected $salario;

        public function setSetor($setor){
            $this->setor = $setor;
        }
        public function setDataAdmissao($dataAdmissao){
            $this->dataAdmissao = $dataAdmissao;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function getSetor(){
            return $this->setor;
        }
        public function getdataAdmissao(){
            return $this->dataAdmissao;
        }
        public function getSalario(){
            return $this->salario;
        }

        public function __construct ($codigo,$nome,$dataNascimento,$setor,$dataAdmissao,$salario){
            parent::__construct($codigo,$nome,$dataNascimento);
            
            $this->setSetor($setor);
            $this->setDataAdmissao($dataAdmissao);
            $this->setSalario($salario);

        }
        
        
        public function imprimir(){
           echo "<br>Codigo: " .  $this->getCodigo();
           echo "<br>Nome: " .  $this->getNome();
           echo "<br>Dada de Nascimento: " . $this->getDataNascimento();
           echo "<br>Setor: " .$this->getSetor();
           echo "<br>Data de Admissao: " . $this->getdataAdmissao();
           echo "<br>Salário: " . $this->getSalario();
        }
    }
?>
<?php
  //require_once('Pessoa.php');
   
    class Cliente extends Pessoa{
        public $preferencia;

        public function setPreferencia ($preferencia){
            $this->preferencia = $preferencia;
        }
        public function getPreferencia(){
            return $this->preferencia;
        }
        
        public function __construct($codigo,$nome,$dataNascimento,$preferencia){
            parent::__construct($codigo,$nome,$dataNascimento);
            $this-> setPreferencia($preferencia);
   
       }
        
       public function imprimir(){
            echo "<br>Codigo: " .   $this->getCodigo();
            echo "<br>Nome: " .   $this->getNome();
            echo "<br>Data Nascimento: " .   $this->getDataNascimento();
            echo "<br>Preferência: " .   $this->getPreferencia();
        }

        
    }
?>
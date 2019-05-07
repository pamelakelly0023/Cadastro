<?php
    
    class Carro {
        public $motor, $modelo, $cor, $marca, $ano, $cambio;

        public function setMotor ($motor){
            $this->motor = $motor;
        }
        public function setModelo ($modelo){
            $this->modelo = $modelo;
        }
        public function setCor ($cor){
            $this->cor = $cor;
        }
        public function setMarca ($marca){
            $this->marca = $marca;
        }
        public function setAno ($ano){
            $this->ano = $ano;
        }
        public function setCambio ($cambio){
            $this->cambio = $cambio;
        }

        public function getMotor(){
            return $this->motor;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getCor(){
            return $this->cor;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getAno(){
            return $this->ano;
        }
        public function getCambio(){
            return $this->cambio;
        }

        public function imprimeCarro($motor,$modelo,$cor,$marca,$ano,$cambio){
            $this->setMotor($motor);
            $this->setModelo($modelo);
            $this->setCor($cor);
            $this->setMarca($marca);
            $this->setAno($ano);
            $this->setCambio($cambio);

            echo "Dados do Carro: <br>";

           echo "<br>Motor: " . $this->getMotor();
           echo "<br>Modelo: ". $this->getModelo();
           echo "<br>Cor: " .$this->getCor();
           echo "<br>Marca: ". $this->getMarca();
           echo "<br>Ano: " . $this->getAno();
           echo "<br>Cambio: ". $this->getCambio();
           echo "<br><br>";
        }
        public function imprimeMotor($cilindro,$potencia,$giroAtual,$combustivel){
            $this->setCilindro($cilindro);
            $this->setPotencia($potencia);
            $this->setGiroAtual($giroAtual);
            $this->setCombustivel($combustivel);

            echo "Dados do Motor: <br>";
            
            echo "<br>Cilindro: " . $this->getCilindro();
            echo "<br>Potencia: " . $this->getPotencia();
            echo "<br>Giro Atual: " . $this->getGiroAtual();
            echo "<br>Combustivel: " . $this->getCombustivel();
        }
        
    }
?>
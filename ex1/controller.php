<?php

include 'Carro.php';
$carro = new Carro();
	
	if(filter_input(INPUT_POST, "motor")&&
        filter_input(INPUT_POST, "modelo")&&
        filter_input(INPUT_POST, "cor")&&
        filter_input(INPUT_POST, "marca")&&
        filter_input(INPUT_POST, "ano")&&
        filter_input(INPUT_POST, "cambio")
    ){

 
     $motor = filter_input(INPUT_POST, "motor");
     $modelo = filter_input(INPUT_POST, "modelo");
     $cor = filter_input(INPUT_POST, "cor");
     $marca = filter_input(INPUT_POST, "marca");
     $ano = filter_input(INPUT_POST, "ano");
     $cambio = filter_input(INPUT_POST, "cambio");

    
     $carro->imprimeCarro($motor,$modelo,$cor,$marca,$ano,$cambio);

    }

    include 'Motor.php';

    $motor = new Motor();

    if(filter_input(INPUT_POST, "cilindro")&&
    filter_input(INPUT_POST, "potencia")&&
    filter_input(INPUT_POST, "giroAtual")&&
    filter_input(INPUT_POST, "combustivel")
    
    ){

    $cilindro = filter_input(INPUT_POST, "cilindro");
    $potencia = filter_input(INPUT_POST, "potencia");
    $giroAtual = filter_input(INPUT_POST, "giroAtual");
    $combustivel = filter_input(INPUT_POST, "combustivel");

    $motor->imprimeMotor($cilindro, $potencia, $giroAtual, $combustivel);

    }
     
    
?>
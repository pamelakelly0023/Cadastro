<?php
 include 'Pessoa.php';
 include 'Cliente.php';
 


if(filter_input(INPUT_POST, "codigo")&&
    filter_input(INPUT_POST, "nome")&&
    filter_input(INPUT_POST, "dataNascimento")&&
    filter_input(INPUT_POST, "preferencia")
    )
    
    {
        $codigo = filter_input(INPUT_POST, "codigo");
        $nome = filter_input(INPUT_POST, "nome");
        $dataNascimento = filter_input(INPUT_POST, "dataNascimento");
        $preferencia = filter_input(INPUT_POST, "preferencia");

        $cliente = new Cliente($codigo,$nome,$dataNascimento, $preferencia);

        $cliente->imprimir();
    }
?>
<?php
 include 'Pessoa.php';
 include 'Colaborador.php';

 

 if(filter_input(INPUT_POST, "codigo")&&
    filter_input(INPUT_POST, "nome")&&
    filter_input(INPUT_POST, "dataNascimento")&&
    filter_input(INPUT_POST, "setor")&&
    filter_input(INPUT_POST, "dataAdmissao")&&
    filter_input(INPUT_POST, "salario")
    )
    
    {
        $codigo = filter_input(INPUT_POST, "codigo");
        $nome = filter_input(INPUT_POST, "nome");
        $dataNascimento = filter_input(INPUT_POST, "dataNascimento");
        $setor = filter_input(INPUT_POST, "setor");
        $dataAdmissao = filter_input(INPUT_POST, "dataAdmissao");
        $salario = filter_input(INPUT_POST, "salario");

        $colaborador = new Colaborador($codigo,$nome,$dataNascimento,$setor,$dataAdmissao,$salario);

        $colaborador->imprimir();
    }
?>
<?php
    include_once 'funcionario.class.php';

    $funcionario1 = new Funcionario('fulano', 1400.20);

    $funcionario1->exibirInformacoes();

    $funcionario1->aumentarSalario(-20);

    $funcionario1->exibirInformacoes();
?>
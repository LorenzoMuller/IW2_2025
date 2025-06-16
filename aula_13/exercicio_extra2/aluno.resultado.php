<?php
    include_once 'Aluno.class.php';

    $aluno = new Aluno("Fulano Silva", 7, 8);
    echo $aluno->getNome() . " - Média: " . $aluno->getMedia() . " - Situação: " . $aluno->verificarSituacao();
    echo "<hr>";
?>
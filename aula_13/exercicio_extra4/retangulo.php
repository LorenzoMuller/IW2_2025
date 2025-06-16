<?php
    include_once 'retangulo.class.php';

    $retangulo1 = new Retangulo;

    $retangulo1->setAltura(5);
    $retangulo1->setLargura(10);

    $retangulo1->CalcularPerimetro();
    $retangulo1->CalcularArea();

?>
<?php
    class funcionario{
        private $Nome;
        private $salario;

        function __construct($nome, $salario){
            $this->Nome = $nome;
            $this->Salario = $salario;
        }

        function aumentarSalario($porcent){
            if($porcent < 0 || $porcent == 0){
                echo 'Essa porcentagem não é um valor válido';
                echo '<br>';
            }
            else{
                $porcentmultipli = $porcent / 100;
                $salarioNovo = $this->Salario + $this->Salario * $porcentmultipli;
                $this->Salario = $salarioNovo;
                return $salarioNovo;
            }
        }


        function exibirInformacoes(){
            echo 'nome do funcionário : ' . $this->Nome;
            echo '<br>';
            echo 'salário do funcionário : ' . $this->Salario;
            echo '<hr>';
        }
    }


?>
<?php
    class Retangulo{
        private $Altura;
        private $Largura;

        
        function getAltura(){
            echo 'A altura do retângulo: ' . $this->Altura;
            echo '<br>';
        }
        function getLargura(){
            echo 'A largura do retângulo: ' . $this->Largura;
            echo '<br>';
        }

       

        function setAltura($alturaNova){
            if ($alturaNova < 0 || $alturaNova == 0) {
                
            }
            else{
                $this->Altura = $alturaNova;
            }
        }
        function setLargura($larguraNova){
            if ($larguraNova < 0 || $larguraNova == 0) {
                
            }
            else{
                $this->Largura = $larguraNova;
            }
        }

       

        function CalcularArea(){
            $area = $this->Largura * $this->Altura;
            echo "A área do retângulo é: " . $area . '<br>';
        }
        function CalcularPerimetro(){
            $perimetro = 2 * ($this->Largura + $this->Altura);
            echo "O perímetro do retângulo é: " . $perimetro . '<br>';
        }
    }


?> 
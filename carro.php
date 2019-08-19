<?php
    class Carro
    {
        private $placa;
        private $qntGasosa;
        private $rendimento;
        private $capacidade;

        public function __construct($cplaca)
        {
            $this->placa = $cplaca;
            $this->gasosa = 20;
            $this->rendimento = 10;
            $this->capacidade = 40;
        }

        public function andar()
        {
            echo 'Andou '.$this->rendimento/ . ' Km';

            $this->rendimento = $andou/$this->gasosa;
            return $this->rendimento/$this->gasosa;
        }

        public function abastecer()
        {
            echo 'ele tem '. $this->gasosa. ' litros';
            
            if($this->gasosa <= 10){
                echo 'Abasteça imediatamente';
            }
        }

        public function calcularAutonomia()
        {
            return $this->gasosa * $this->rendimento;

           
        }

        public function monstrarEstado()
        {
            echo 'placa:'.$this->placa.'<br>';
            echo 'gasosa:'.$this->gasosa.'<br>';
            echo 'rendimento:'.$this->rendimento.'<br>';
            echo 'capacidade:'.$capacidade.'<br>';
            echo 'andou:'.$this->andou.'<br>-----<br>';

        }



    }
    $carro = new Carro('QWER-123');
    $carro->andar();
    $carro->abastecer();
    echo "calculo da autonomia ".$carro->calcularAutonomia()." Km";
    $carro->monstrarEstado();


?>
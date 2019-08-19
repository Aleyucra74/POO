<?php

    class Gato
    {
        private $nome;
        private $humor;
        private $fome;
        private $energia;

        public function __construct($gnome,$ghumor,$gfome,$genergia)
        {
            $this->nome = $gnome;
            $this->humor = $ghumor;
            $this->fome = $gfome;
            $this->energia = $genergia;

        }

        public function brincar()
        {
            echo $this->nome. ' esta brincando<br>'; 
            $this->humor++;
            $this->fome++;
            $this->energia--;
        }

        public function dormir()
        {
            echo $this->nome . ' esta dormindo<br>';
            $this->humor--;
            $this->fome++;
            $this->energia--;
        }

        public function comer()
        {
            echo $this->nome . ' esta comendo<br>';
            $this->humor++;
            $this->fome-=3;
            $this->energia-=3;
        }

        public function monstrarEstado()
        {
            echo 'nome:'.$this->nome.'<br>';
            echo 'humor:'.$this->humor.'<br>';
            echo 'fome:'.$this->fome.'<br>';
            echo 'energia:'.$this->energia.'<br>-----<br>';
        }

    }

$gato1 = new Gato ('Brigadeiro',5,5,5);
$gato1->comer();
$gato1->monstrarEstado();


?>
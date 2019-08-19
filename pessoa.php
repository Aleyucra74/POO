<?php  

    class Pessoa 
    {
        private $nome;
        private $idade;
        private $cor;
        private $sexo;

        public function __construct($pnome,$pidade,$pcor,$psexo)
        {
            $this->nome = $pnome;
            $this->idade = $pidade;
            $this->cor = $pcor;
            $this->sexo = $psexo;
        }

        public function dormir() 
        {
            echo $this->nome . " falou: comecei a dormir...<br>";
        }

        public function comer()
        { 
            echo $this->nome . " falou: comidaa..<br>";
        }

        public function falar($texto)
        {
            echo $this->nome . " falou :".$texto."<br>";
        }



    }

    $p1 = new Pessoa('zwipp','19','branca','M');
    $p2 = new Pessoa('ana','19','branca','F');
    $p2->dormir();
    $p2->dormir();

    

?>
<?php

    class Lutador{

        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Métodos
        public function apresentar(){

            echo "<p>-------------------------------------------------</p>";
            echo "CHEGOU A HORA! O lutador " . $this->getNome();
            echo " veio diretamente de " . $this->getNacionalidade();
            echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
            echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
            echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates!";

        }

        public function status(){

            echo "<p>Nome: " . $this->getNome() . "</p>";
            echo "<p>É um peso: " . $this->getCategoria() . "</p>";
            echo "<p>Vitórias: " . $this->getVitorias() . "</p>";
            echo "<p>Derrotas: " . $this->getDerrotas() . "</p>";
            echo "<p>Empates: " . $this->getEmpates() . "</p>";
        }

        public function ganharLuta(){

            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){

            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){

            $this->setEmpates($this->getEmpates() + 1);
        }

        // Métodos especiais
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
            
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso); // A função do peso aciona também a de categoria
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        // NOME
        public function getNome(){

            return $this->nome;
        }
        public function setNome($nome){

            $this->nome = $nome;
        }

        // NACIONALIDADE
        public function getNacionalidade(){

            return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade){

            return $this->nacionalidade = $nacionalidade;
        }

        // IDADE
        public function getIdade(){

            return $this->idade;
        }
        public function setIdade($idade){
            
            $this->idade = $idade;
        }

        // ALTURA
        public function getAltura(){

            return $this->altura;
        }
        public function setAltura($altura){

            $this->altura = $altura;
        }

        // PESO
        public function getPeso(){

            return $this->peso;
        }
        public function setPeso($peso){

            $this->peso = $peso;

            // Quando eu alterar o peso, o programa vai automaticamente modificar a categoria. Isso porque chamei o método setCategoria()!
            $this->setCategoria();
        }

        // CATEGORIA
        public function getCategoria(){

            return $this->categoria;
        }
        public function setCategoria(){

            if($this->peso < 52.2){
                $this->categoria = "Não pode ser lutador";
            }
            else if($this->peso <= 70.3){
                $this->categoria = "Leve";
            }
            else if($this->peso <= 83.9){
                $this->categoria = "Médio";
            }
            else if($this->peso <= 120.2){
                $this->categoria = "Pesado";
            }
            else{
                $this->categoria = "Inválido";
            }
        }

        // VITÓRIAS
        public function getVitorias(){

            return $this->vitorias;
        }
        public function setVitorias($vitorias){

            $this->vitorias = $vitorias;
        }

        // DERROTAS
        public function getDerrotas(){

            return $this->derrotas;
        }
        public function setDerrotas($derrotas){

            $this->derrotas = $derrotas;
        }

        // EMPATES
        public function getEmpates(){

            return $this->empates;
        }
        public function setEmpates($empates){

            $this->empates = $empates;
        }
    }

?>
<?php

    class Pessoa{

        private string $nome;
        private int $idade;

        public function __construct($nome, $idade){

            $this->nome = $nome;
            $this->idade = $idade;
        }

        // Nome
        public function getNome(){
            
            return "Seu nome é: $this->nome <br>";
        }

        public function setNome(string $nome){

            $this->nome = $nome;
        }

        // Idade
        public function getIdade(){

            return "Idade: $this->idade <br>";
        }

        public function setIdade(int $idade){

            return "Sua nova idade é: $this->idade = $idade <br>";
        }

        public function socializar(){
            echo "Seu nome é: $this->nome <br>";
            echo "Idade: $this->idade <br>";

        }
    }



?>
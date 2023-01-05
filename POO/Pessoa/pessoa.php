<?php

    class Pessoa{

        private string $nome;
        private string $idade;

        public function __construct($nome, $idade){

            $this->nome = $nome;
            $this->idade = $idade;

        }

        // Nome
        public function getNome(){

            return $this->nome;  

        }

        // Idade
        public function getIdade(){

            return $this->idade;

        }

        public function socializar(){

            if(empty($this->nome)){
                echo "<span style='color: red';>Nome inválido</span><br>";
            }
            else{
                echo "Seu nome é: $this->nome <br>";
            }

            if(empty($this->idade) || ($this->idade < 0)){

                echo "<span style='color: red';>Idade inválida</span><br>";

            }
            else{
                echo "Idade: $this->idade <br>";
            } 
        }


        function getEscolaridade(){

            $escolaridade = $_POST["escolaridade"];

            switch($escolaridade){

                case "ens_fund":
                    echo "Você está no ensino fundamental";
                    break;
                
                case "ens_med":
                    echo "Você está no ensino médio";
                    break;

                case "ens_sup":
                    echo "Você está no ensino superior";
                    break;
            }
        }

    }
?>
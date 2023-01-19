<?php

    include_once "Controlador.php";

    class ControleRemoto implements Controlador{

        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){

            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        // Volume
        private function getVolume(){

            return $this->volume;
        }
        private function setVolume($v){

            $this->volume = $v;
        }

        // Ligado
        private function getLigado(){

            return $this->ligado;
        }
        private function setLigado($l){

            $this->ligado = $l;
        }

        // Tocando
        private function getTocando(){

            return $this->tocando;
        }
        private function setTocando($t){

            $this->tocando = $t;
        }

        /* Métodos Abstratos */

        public function ligar(){

            $this->setLigado(true);
        }
        
        public function desligar(){

            $this->setLigado(false);
        }

        public function abrirMenu(){
            
            echo "<p>---- MENU ----</p>";

            echo "<br>Está ligado? " . ($this->getLigado()?"Sim":"Não");
            echo "<br>Está tocando? " . ($this->getTocando()?"Sim":"Não");
            echo "<br>Volume: " . $this->getVolume();

            for($i = 0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            
            echo "A TV está desligada.";
        }

        public function fecharMenu(){

            if($this->getLigado()){

                echo "Fechando Menu...";
            }   
        }

        public function maisVolume(){
            
            if($this->getLigado()){

                $this->setVolume($this->getVolume() + 1);
            }
        }

        public function menosVolume(){
            
            if($this->getLigado()){

                $this->setVolume($this->getVolume() - 1);
            }
        }

        public function ligarMudo(){
            
            if($this->getLigado()){

                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            
            if($this->getLigado() && $this->getVolume(0)){

                $this->setVolume(50);
            }
        }

        public function play(){

            if( $this->getLigado() && !($this->getTocando()) ){
                
                $this->setTocando(true);
            }

        }

        public function pause(){

            if($this->getLigado() && $this->getTocando()){

                $this->setTocando(false);
            }
        }
    }
?>
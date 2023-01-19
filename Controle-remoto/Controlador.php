<?php

    interface Controlador{
        
        // A interface apenas diz que existem estes métodos e quem implementar do Controlador, é obrigado a sobrescrevê-los.

        public function ligar();
        public function desligar();
        public function abrirMenu();
        public function fecharMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();

    }


?>
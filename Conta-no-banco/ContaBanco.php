<?php

    /*
        Nota: CC -> Conta Corrente ; CP -> Conta Poupança
    */ 

    class ContaBanco{

        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos especiais
        public function __construct(){
            
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        /* Número da conta */
        public function getNumConta(){
            return $this->numConta;
        }
        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }

        /* Tipo da conta */ 
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        /* Dono da conta*/
        public function getDono(){
            return $this->dono;
        }
        public function setDono($dono){
            $this->dono = $dono;
        }

        /* Saldo da conta*/ 
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        /* Status da conta */
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }


        // Métodos comuns
        public function abrirConta($t){

            // Ao abrir a conta, é isso que vai acontecer
            $this->setTipo($t);
            $this->setStatus(true);

            if($t == "CC"){
                $this->setSaldo(50);
            }
            else if($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){

            // Ao fechar a conta, é isso que vai acontecer
            if($this->getSaldo() > 0){
                echo "<p>Erro! A conta ainda tem dinheiro, é impossível encerrar.</p>";
            }
            else if($this->getSaldo() < 0){
                echo "<p>A conta está em débito, é impossível encerrar.</p>";
            }
            else{
                $this->setStatus(false);
                echo "<p> A conta de " . $this->getDono() . " foi encerrada.</p>";
            }
        }

        public function depositar($v){

            // Para depositar, é preciso ter conta ativa
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v na conta de " . $this->getDono();
            }
            else{
                echo "<p>Conta fechada. Impossível depositar</p>";
            }
        }

        public function sacar($v){
            
            if($this->getStatus() == true){

                // O saldo deve ser maior que o valor
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de " . $this->getDono() . "</p>"; 
                }
                else{
                    echo "<p>Saldo insuficiente para sacar.</p>";
                }
            }
            else{
                echo "<p>Não posso sacar de uma conta inativa.</p>";
            }
        }

        public function pagarMensalidade(){
            
            // Dependendo do tipo de conta, o valor é diferente
            if($this->getTipo() == "CC"){
                $v = 12;
            }
            else{
                $v = 20;
            }

            if($this->getStatus() == true){

                // O saldo deve ser maior que o valor da mensalidade
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$ $v debitada da conta de " . $this->getDono() . "</p>";
                }
                else{
                    echo "Saldo insuficiente para pagar a mensalidade!";
                }
            }
            else{
                echo "Conta inativa. Impossível pagar mensalidade.";
            }

        }

    }

?>
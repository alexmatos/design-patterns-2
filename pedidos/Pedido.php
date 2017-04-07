<?php

class Pedido {
    private $cliente;
    private $valor;
    private $status;
    
    function __construct($cliente, $valor) {
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->status = new Novo();
    }
    
    public function pagar() {
        $this->status = new Pago();
    }
    
    public function finalizar() {
        $this->status = new Finalizado();
    }
    
    function getCliente() {
        return $this->cliente;
    }

    function getValor() {
        return $this->valor;
    }

    function getStatus() {
        return $this->status;
    }


}

<?php

/**
 * Description of Contrato
 *
 * @author alex
 */
class Contrato {

    private $nome;
    private $data;
    private $tipo;
    
    function __construct($nome, $data) {
        $this->nome = $nome;
        $this->data = $data;
        $this->tipo = new Novo();
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function avanca() {
        $this->tipo->avanca($this);
    }

}

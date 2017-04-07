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
    
    function __construct($nome, $data, $tipo = null) {
        $this->nome = $nome;
        $this->data = $data;
        if(is_null($tipo)) {
        $this->tipo = new Novo();
        } else {
            $this->tipo = $tipo;
        }
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function avanca() {
        $this->tipo->avanca($this);
    }
    
    public function salvaEstado(){
        return new Estado(new Contrato($this->nome, $this->data, $this->tipo));
    }

}

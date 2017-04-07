<?php

/**
 * Description of Historico
 *
 * @author alex
 */
class Historico {
    
    private $estadosDoContrato;
    
    function __construct() {
        $this->estadosDoContrato = [];
    }

    public function getEstado($index) {
        return $this->estadosDoContrato[$index];
    }
    
    public function addEstado(Estado $estado) {
        $this->estadosDoContrato[] = $estado;
    }
}

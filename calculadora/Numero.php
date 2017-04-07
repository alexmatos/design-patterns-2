<?php

/**
 * Description of Numero
 *
 * @author alex.matos
 */
class Numero implements Expressao {
    
    private $numero;
    
    function __construct($numero) {
        $this->numero = $numero;
    }
    
    public function avalia(){
        return $this->numero;
    }

    function getNumero() {
        return $this->numero;
    }

    public function imprime(\Visitor $impressora) {
        $impressora->imprimeNumero($this);
    }

}

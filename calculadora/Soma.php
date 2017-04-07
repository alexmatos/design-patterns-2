<?php

/**
 * Description of Numero
 *
 * @author alex.matos
 */
class Soma implements Expressao {

    private $esquerdo;
    private $direito;

    function __construct(Expressao $ladoEsquerdo, Expressao $ladoDireito) {
        $this->esquerdo = $ladoEsquerdo;
        $this->direito = $ladoDireito;
    }

    public function avalia() {
        $valorEsq = $this->esquerdo->avalia();
        $valorDir = $this->direito->avalia();
        return $valorEsq + $valorDir;
    }

    public function imprime(\Visitor $impressora) {
        $impressora->imprimeSoma($this);
    }

    function getEsquerdo() {
        return $this->esquerdo;
    }

    function getDireito() {
        return $this->direito;
    }

}

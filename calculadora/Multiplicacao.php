<?php

/**
 * Description of Numero
 *
 * @author alex.matos
 */
class Multiplicacao implements Expressao {

    private $esquerdo;
    private $direito;

    function __construct(Expressao $ladoEsquerdo, Expressao $ladoDireito) {
        $this->esquerdo = $ladoEsquerdo;
        $this->direito = $ladoDireito;
    }

    public function avalia() {
        $valorEsq = $this->esquerdo->avalia();
        $valorDir = $this->direito->avalia();
        return $valorEsq * $valorDir;
    }

}

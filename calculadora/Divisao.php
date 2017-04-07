<?php

/**
 * Description of Numero
 *
 * @author alex.matos
 */
class Divisao implements Expressao {

    private $esquerdo;
    private $direito;

    function __construct(Expressao $ladoEsquerdo, Expressao $ladoDireito) {
        $this->esquerdo = $ladoEsquerdo;
        $this->direito = $ladoDireito;
    }

    public function avalia() {
        $valorEsq = $this->esquerdo->avalia();
        $valorDir = $this->direito->avalia();
        if ($valorDir == 0) {
            return new DivisionByZeroError("Não pode efetuar divisão por zero!");
        }
        return $valorEsq / $valorDir;
    }

}

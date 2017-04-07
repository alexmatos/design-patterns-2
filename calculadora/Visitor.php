<?php

/**
 *
 * @author alex.matos
 */
interface Visitor {

    public function imprimeNumero(Numero $numero);

    public function imprimeSoma(Soma $soma);

    public function imprimeSubtracao(Subtracao $subtracao);
}

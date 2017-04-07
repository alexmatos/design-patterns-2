<?php

/**
 *
 * @author alex.matos
 */
interface Expressao {

    public function avalia();
    
    public function imprime(Visitor $impressora);
}

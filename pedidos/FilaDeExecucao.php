<?php

class FilaDeExecucao {
    
    private $listaDeComandos;
    
    function __construct() {
        $this->listaDeComandos = [];
    }
    
    public function adiciona(Comando $comando) {
        $this->listaDeComandos[] = $comando;
    }

    public function processa() {
        foreach ($this->listaDeComandos as $comando) {
            $comando->executa();
        }
    }

}

<?php

class ImpressoraPreOrdem implements Visitor {

    public function imprimeNumero(Numero $numero) {
        echo $numero->getNumero();
    }

    public function imprimeSoma(Soma $soma) {
        echo "(";
        echo "+ ";
        echo $soma->getEsquerdo()->imprime($this);
        echo " ";
        echo $soma->getDireito()->imprime($this);
        echo ")";
    }

    public function imprimeSubtracao(Subtracao $subtracao) {
        echo "(";
        echo "- ";
        echo $subtracao->getEsquerdo()->imprime($this);
        echo " ";
        echo $subtracao->getDireito()->imprime($this);
        echo ")";
    }

}

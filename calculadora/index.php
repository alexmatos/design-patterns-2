<?php

function importa($classe) {
    require $classe . '.php';
}

spl_autoload_register('importa');

$relogio = new Relogio();
echo $relogio->getDia() . "/" . $relogio->getMes();

echo '<br>';

//// 1 + 3
$esquerdo = new Numero(1);
$direito = new Numero(3);
$soma = new Soma($esquerdo, $direito);
echo $soma->avalia();
echo '<br>';

// (1 + 3) + (5 - 2)
$esquerdo = new Soma(new Numero(1), new Numero(3));
$direito = new Subtracao(new Numero(5), new Numero(2));
$soma = new Soma($esquerdo, $direito);

$impressora = new Impressora();
$impressora->imprimeSoma($soma);
echo " = ";
echo $soma->avalia();

echo '<br>Impressão em pré-fixa: ';
$impressora = new ImpressoraPreOrdem();
$impressora->imprimeSoma($soma);
echo '<br>';

$mapa = new GoogleMaps();
echo $mapa->getMapa();
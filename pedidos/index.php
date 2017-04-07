<?php

function importa($classe) {
    require $classe . '.php';
}

spl_autoload_register('importa');

$pedido1 = new Pedido('Alex', 500);
$pedido2 = new Pedido('João', 400);
$pedido3 = new Pedido('Maria', 300);
$pedido4 = new Pedido('Aline', 200);

$fila = new FilaDeExecucao();
$fila->adiciona(new ComandoPagar($pedido1));
$fila->adiciona(new ComandoPagar($pedido2));
$fila->adiciona(new ComandoPagar($pedido3));
$fila->adiciona(new ComandoPagar($pedido4));
$fila->adiciona(new ComandoFinalizar($pedido3));
$fila->processa();

echo '<pre>';
var_dump($pedido1);
<?php

function importa($classe) {
    require $classe . '.php';
}

spl_autoload_register('importa');

date_default_timezone_set("America/Campo_Grande");
$historico = new Historico();
$contrato = new Contrato('Alura', date('Y-m-d'));
$historico->addEstado($contrato->salvaEstado());
echo "<pre>";
var_dump($contrato);
$contrato->avanca();
$historico->addEstado($contrato->salvaEstado());
var_dump($contrato);
var_dump($historico);
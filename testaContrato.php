<?php
function importa($classe){
     require $classe . '.php;';
}

spl_autoload_register('importa');

$contrato = new Contrato('Alura', new date('Y-m-d'));

echo "<pre>";

echo var_dump($contrato);

$contrato->avanca();
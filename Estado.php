<?php

/**
 * Description of Estado
 *
 * @author alex.matos
 */
class Estado {

    private $contrato;
    private $horaGerada;

    function __construct($contrato) {
        $this->contrato = $contrato;
        $this->horaGerada = date('H:i:s');
    }

    function getContrato() {
        return $this->contrato;
    }

}

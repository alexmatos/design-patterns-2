<?php

/**
 * Description of Relogio
 *
 * @author alex.matos
 */
class Relogio implements Data{
    
    
    public function getDia() {
        return date("d");
    }

    public function getMes() {
        return date("m");
    }

}

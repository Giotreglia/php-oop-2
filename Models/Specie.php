<?php

class Specie {
    public $name;

    public function setSpecie($specie) {
        
        $species = [
            'Cat',
            'Dog'
        ];

        //Verifica validità specie
        if (!in_array($specie, $species)) {
            throw new Exception('Il valore inserito non corrisponde ad una specie valida');
        } else {
            $this->name = $specie;
        }
    }
}
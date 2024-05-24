<?php

namespace App\Http\Controllers;

class DtPipolController {
    public function getDtPipol() {
        $dtPipolName = [
            ['namePerson' => 'Aureliano Buendia'],
            ['namePerson' => 'Cornelius Richet'],
            ['namePerson' => 'Irving Karli'],
            ['namePerson' => 'Michael Fonobocci'],
        ];
    
        //? La funcion view() recibe 2 parametros 
        //OjO -> ('Nombre de la vista'), (Datos)!Opcional
        return view('usando', ['dtPipolName' => $dtPipolName]);
    }
}
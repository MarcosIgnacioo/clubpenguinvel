<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludar/{name}/{lastName?}', function ($name = "popo", $lastName = "Doc") {
    return "hello $name $lastName";
});

Route::get('/hello/{name?}', function ($name = "popo") {
    return "wep $name";
});

Route::get('/operation/{type}/{a}/{b}', function ($type,$a = 1, $b=1) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return response()->json(['error' => 'NUMEROS PADRINO'], 400);
    }
    switch ($type) {
        case 'sumar':
            return $a + $b;
            break;

        case 'restar':
            return $a - $b;
            break;

        case 'multiplicar':
            return $a * $b;
            break;

        case 'dividir':
            return $a / $b;
            break;
        default:
            return 'popo';
            break;
    }
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('users/', [UserController::class, 'index']);

Route::get('users/create', [UserController::class, 'create']);

Route::post('users/', [UserController::class, 'store']);

Route::get('users/{id}', [UserController::class, 'show']);

Route::get('users/{id}/edit', [UserController::class, 'edit']);

Route::put('users/{id}', [UserController::class, 'update']);

Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');

});

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
})->where(['a'=> '[0-9]+', 'b' => '[0-9]+']);

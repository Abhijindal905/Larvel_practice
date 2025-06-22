<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\TeaDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Abhi"]);
});

// Route::get('/chai', function () {
//     $menu = [
//         ['name' => 'Masala Tea', 'price' => '200', 'id' => 1],
//         ['name' => 'Ginger Tea', 'price' => '250', 'id' => 2],
//         ['name' => 'Assam Tea', 'price' => '300', 'id' => 3],
//         ['name' => 'Tapri Tea', 'price' => '350', 'id' => 4],

//     ];
//     return view('chai.index', ['menu' => $menu]);
// });

Route::get('/chai', [TeaController::class, 'index2']);

// Route::get('/chai/{id}', function ($id) {
//     $menu = [
//         ['name' => 'Masala Tea', 'price' => '200', 'id' => 1],
//         ['name' => 'Ginger Tea', 'price' => '250', 'id' => 2],
//         ['name' => 'Assam Tea', 'price' => '300', 'id' => 3],
//         ['name' => 'Tapri Tea', 'price' => '350', 'id' => 4],

//     ];
//     return view('chai.teadetail', ['tea' => $menu[$id-1]]);
// });

Route::get('chai/{id}', [TeaDetailController::class, 'teadetails']);

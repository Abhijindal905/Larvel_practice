<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;
use App\Http\Controllers\TeaDetailController;
use App\Http\Controllers\AuthController;



// Route::get('', function () {
//     return view('welcome');
// });

Route::get('', [WelcomeController::class, 'greeting']);

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


Route::get('/register', [AuthController::class, 'ShowRegisterForm']);

Route::post('/register', [AuthController::class, 'Register']);

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [AuthController::class, 'showDashboard']);
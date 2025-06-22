<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeaController extends Controller
{
    public function index2()
    {
        $menu = [
            ['name' => 'Masala Tea', 'price' => '200', 'id' => 1],
        ];
        return view('chai.index', ['menu' => $menu]);
    }
}

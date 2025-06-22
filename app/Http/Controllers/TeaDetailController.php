<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeaDetailController extends Controller
{
    public function teadetails($id)
    {
        $tea = [
            ['name' => 'Masala Tea', 'price' => '200', 'id' => 1],
        ];

        return view('chai.teadetail', ['tea_details' => $tea[$id -1]]);
    }
}

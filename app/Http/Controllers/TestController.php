<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index2');
    }

    public function edit()
    {
        return view('edit');
    }
}

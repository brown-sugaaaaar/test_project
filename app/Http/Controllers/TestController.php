<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {

        var_dump($request);
        return view('index2');
    }
}

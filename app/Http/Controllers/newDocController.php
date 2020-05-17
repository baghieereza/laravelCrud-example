<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newDocController extends Controller
{
    protected function index()
    {
        return view('create.index');
    }
}

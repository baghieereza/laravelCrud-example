<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showDocsController extends Controller
{
    public  function index()
    {
        return view('read.all.index');
    }
}

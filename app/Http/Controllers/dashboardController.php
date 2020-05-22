<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\docRepositoryInterface;

class dashboardController extends Controller
{

    protected $doc;

    /**
     * newDocController constructor.
     *
     * @param \App\Repositories\docRepositoryInterface $doc
     */
    public function __construct(docRepositoryInterface $doc)
    {
        $this->doc = $doc;
    }

    public function index()
    {
         $allDoc = $this->doc->all();
         return view('dashboard.index')->with('data' , $allDoc);
    }
}

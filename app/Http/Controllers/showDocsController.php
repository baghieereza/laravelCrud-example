<?php

namespace App\Http\Controllers;

use App\Repositories\docRepositoryInterface;
use Illuminate\Http\Request;

class showDocsController extends Controller
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


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function index()
    {
        $data = $this->doc->all();
        return view('read.all.index')->with('data' , $data);
    }

    public function getOne($id)
    {
        $data = $this->doc->get($id);
        return view('read.single.index')->with('data' , $data);

    }
}

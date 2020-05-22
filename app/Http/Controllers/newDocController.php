<?php

namespace App\Http\Controllers;

use App\helper;
use App\Http\Requests\DocRequest;
use App\Repositories\docRepositoryInterface;
use Illuminate\Http\Request;

class newDocController extends Controller
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
    public function index()
    {
        session()->put('pics',null);
        return view('create.index');
    }

    /**
     * @param \App\Http\Requests\DocRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(DocRequest $request)
    {
        $this->doc->create($request);
        return view('dashboard.index');
    }


    /**
     * @param \Illuminate\Http\Request $request
     * @param \app\helper              $helper
     */
    public function saveImage(Request $request, helper $helper)
    {
     $name = $helper->upload($request);
     session()->push('pics' , $name);
    }
}

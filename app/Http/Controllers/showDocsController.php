<?php

namespace App\Http\Controllers;

use App\Repositories\docRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
     * show all docs
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->doc->all();
        return view('read.all.index')->with('data', $data);
    }

    /**
     * show a doc
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOne($id)
    {
        $data = $this->doc->get($id);
        return view('read.single.index')->with('data', $data);
    }

    /**
     * search between all data
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $data = $this->doc->search($request->input('subject'));
        return view('read.all.index')->with('data', $data);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return string
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $array = $_POST;
        unset($array['_token'], $array['id']);
        $this->doc->update($id, $array);
        $data = $this->doc->get($id);
        return view('read.single.index')->with('data', $data);
    }

    public function checkSubject(Request  $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|unique:documents',
         ]);
        if ($validator->fails()) {
            return response()->json(['success'=>false , 'message' => 'عنوان وارد شده تکراری میباشد']);
        }
        return response()->json(['success'=>true , 'message' => 'عنوان وارد شده مجاز میباشد']);
    }
}

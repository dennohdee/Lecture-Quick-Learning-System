<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lessons;

class AdminDbmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }
    public function index()
    {
        //
        $dbmslessons=lessons::latest()->where('unit_id', '=', '4')->paginate(4);
        return view('admindbms.index',compact('dbmslessons'))->with('i',(request()->input('page',1)-1)*4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admindbms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validations
        request()->validate([
            'lessonNo' => 'required|numeric',
            'objectives' => 'required',
            'content' => 'required',
            'file' => 'required',
            'references' => 'required'
        ]);
        //handle File Upload
        if($request->hasFile('file')){
            //get filename and ext
            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get Just EXT
            $extension = $request->file('file')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload
            $path = $request->file('file')->storeAs('public/files', $fileNameToStore);
        }
        else{
            $fileNameToStore="";
        }
        //get and insert data
        $lessons = new lessons();
        $lessons->lessonNo = $request->get('lessonNo');
        $lessons->objectives = $request->get('objectives');
        $lessons->content = $request->get('content');
        $lessons->file = $fileNameToStore;
        $lessons->references = $request->get('references');
        $lessons->unit_id = $request->get('unit_id');
        $lessons->posted_by = $request->get('posted_by');
        $lessons->save();

            return redirect()->route('admindbms.create')
        ->with("success","Lesson Added Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $dbmslesson=lessons::find($id);
        return view('dbms.details', compact('dbmslesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lessons = lessons::find($id);
        $lessons->delete();
         return redirect()->route('admindbms.index')
        ->with("success","Lesson Deleted Successfully!");
    }
}

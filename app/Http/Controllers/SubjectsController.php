<?php

namespace App\Http\Controllers;
use App\Models\subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Definimos nuestra vista
        //return subjects::all();
        $subjects = subjects::all();
        return view('Subjects.index', compact('subjects'));

        //return response()->json([$Subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Subjects.add');
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $input=$request->all();
        subjects::create($input);
        return redirect('subjects')->with('flash_message','subjects Addedd!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = subjects::find($id);
        return view('Subjects.show')->with('subjects',$subject);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $subject = subjects::find($id);
        return view('Subjects.edit')->with('subjects', $subject);
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
        $subject= subjects::find($id);
        $input=$request->all();
        $subject->update($input);
        return redirect('subjects')->with('flash_message', 'subject Updated!');
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
        $subject = subjects::findOrFail($id);
        $subject->delete();
        return ('el tema se elimino con exito');
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\groups;
use App\Models\students;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Definimos nuestra vista
        //return groups::all();
        //$Groups = Groups::all();
       // return Response()->json([$Groups]);
       $groups = groups::all();
        return view('Groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('Groups.add');

        $students = students::all('id','name');
        return view('Groups.add', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();
        groups::create($input);
        return redirect('groups')->with('flash_message','groups Addedd!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = groups::find($id);
        return view('Groups.show')->with('groups',$group);
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
        // $group = groups::find($id);
        // return view('Groups.edit')->with('groups', $group);
        //

        $students = students::all('id','name');
        $group = groups::find($id);
        return view('Groups.edit', compact('students'))->with('groups', $group);
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
        $group= groups::find($id);
        $input=$request->all();
        $group->update($input);
        return redirect('groups')->with('flash_message', 'group Updated!');
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

        $group = groups::findOrFail($id);
        $group->delete();
        return ('el grupo se logro eliminar de manera correcta');
    }
}




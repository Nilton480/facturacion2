<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\note;
class notecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('note.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       /* $name =$request['name'];
        $email= $request['email'];
        $mensaje= $request['mensaje'];*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       // $note=note::create($request->all());
        //dd($note);
        //return 'guardar mensaje';
        $note =new note;
        $note->name=request()->name;
        $note->prefix=request()->prefix;
        $note->number =request()->number;
        $note->type =request()->type;
        $note->value =request()->value;
        $note->invoice_id =request()->invoice_id;
         $note->mensaje=request()->mensaje;
        $note->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showform()
    {   // $note->all();

        return view('note');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $note=note::findOrfail($id); //nota es el registro que deseo ver, donde $id es la identificacion de ese registro
       return view('note.edit', compact('note'));
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
        $note=note::findorfail($id);
        $note->update($request->all());
        return view('note.edit',compact('note'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note=note::findorfail($id);
        $note->delete();
        return view('note.index');
    }
}

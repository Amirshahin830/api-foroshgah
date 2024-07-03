<?php

namespace App\Http\Controllers;

use App\mahsol as AppMahsol;
use Illuminate\Http\Request;
use App\mahsol;
class mahsolat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return mahsol::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $database =new mahsol();
        $database->name= $request->name;
        $database->mojodi=$request->mojodi;
        $database->price=$request->price;
        $database->save();
        return response()->json(['amaliat ba movafaghiat anjam shod ! ']);
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
    public function update(Request $request)
    {

        $data = mahsol::find($request->id);
        $data ->mojodi= $data->mojodi - 1;
        $data ->save();
        return response()->json(["kharid shoma anjam shod ! "]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $database = mahsol::where('id',$request->id);
       $database -> delete();
       return response()->json(["amaliat ba movafaghiat anjam shod ! "]);
    }
}

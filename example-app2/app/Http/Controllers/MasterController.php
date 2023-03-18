<?php

namespace App\Http\Controllers;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mas=Master::all();
        return view ('announce.index',['as'=>$mas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('announce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name' => 'required',
        //     'description'=> 'required',
        // ]);
        // $mas = new Master();
        // $mas -> name = $request -> input('name');
        // $mas -> description = $request -> input('description');
        // $mas -> save();
        // return view ('index',['as'=>$mas]);
        $mas=new Master();
        $mas->name=$request->name;
        $mas->description=$request->description;
        $mas->save();
        $mas=Master::all();
        return view ('announce.index',['as'=>$mas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

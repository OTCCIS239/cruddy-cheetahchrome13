<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gem;

class GemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($gems);
        $gems = Gem::all();
        return view('gems.index', compact('gems'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->Validate($request, [
            'name'=> 'required|string',
            'type'=> 'required|string',
            'cut'=> 'required|string',
            'size'=> 'required|string',
            'description'=> 'required|string',
            'price'=> 'required|numeric',
            'stock'=> 'required|numeric',
            'img'=> 'required|string'
       ]);

       $gem = Gem::create($request->all());
       return redirect('/gems/' . $gem->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gem $gem)
    {
        // $gem = Gem::findOrFail($id); 
        return view('gems.show', compact('gem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gem $gem)
    {
        return view('gems.edit', compact('gem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gem $gem)
    {
        $gem->update($request->all());
        return redirect('/gems/' . $gem->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gem $gem)
    {
        $gem->delete();
        return redirect('/gems');
    }
}

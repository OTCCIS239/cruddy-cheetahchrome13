<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jewelry;

class JewelryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jewelries = Jewelry::all();
        return view('jewelry.index', compact('jewelries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jewelry.create');
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
            'size'=> 'required|string',
            'description'=> 'required|string',
            'price'=> 'required|numeric',
            'stock'=> 'required|numeric',
            'img'=> 'required|string'
       ]);

       $jewelry = Jewelry::create($request->all());
       return redirect('/jewelry/' . $jewelry->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jewelry $jewelry)
    {
        // $jewelry = Jewelry::findOrFail($id);
        return view('jewelry.show', compact('jewelry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jewelry $jewelry)
    {
        return view('jewelry.edit', compact('jewelry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jewelry $jewelry)
    {
        $jewelry->update($request->all());
        return redirect('/jewelry/' . $jewelry->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jewelry $jewelry)
    {
        $jewelry->delete();
        return redirect('/jewelry');
    }
}

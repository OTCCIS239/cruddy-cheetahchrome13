<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metal;
use App\Http\Requests\CreateMetalRequest;

class MetalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metals = Metal::all();
        return view('metals.index', compact('metals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('metals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $this->Validate($request, [
    //    ]);

       $metal = Metal::create($request->all());
       return redirect('/metals/' . $metal->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Metal $metal)
    {
        // $metal = Metal::findOrFail($id);
        return view('metals.show', compact('metal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Metal $metal)
    {
        return view('metals.edit', compact('metal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metal $metal)
    {
        $metal->update($request->all());
        return redirect('/metals/' . $metal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metal $metal)
    {
        $metal->delete();
        return redirect('/metals');
    }
}

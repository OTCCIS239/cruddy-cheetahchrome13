<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gem;
use App\Http\Requests\CreateGemRequest;

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
    public function store(CreateGemRequest $request)// tried using 'CreateGemRequest' type - hinting here 
    {
    //    $this->Validate($request, [
    //     'name'=> 'required',
    //     'type'=> 'required',
    //     'cut'=> 'required',
    //     'size'=> 'required',
    //     'description'=> 'required',
    //     'price'=> 'required|numeric',
    //     'stock'=> 'required|numeric',
    //     'img'=> 'required'
    //    ]);
   
        $gem = Gem::create($request->all());
       
        
        /* SUBSTITUTE TEST CODE  */    
        // $gem = new Gem;
        // $gem->name = $request->name;
        // $gem->type = $request->type;
        // $gem->cut = $request->cut;
        // $gem->size = $request->size;
        // $gem->description = $request->description;
        // $gem->price = $request->price;
        // $gem->stock = $request->stock;
        // $gem->img = $request->img;
        // $gem->save();


    //    dd($gem);                                                             
        
       return redirect('/gems/' . $gem->id); // 
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
    public function update(CreateGemRequest $request, Gem $gem)
    {
        $gem->update($request->all()); 
        // dd($gem); 
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
        // dd($gem);
        $gem->delete(); 
        return redirect('/gems'); 
        
    }
}

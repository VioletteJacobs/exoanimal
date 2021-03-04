<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view("welcome");
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DBImage = Image::all();
        return view("pages.upload", compact('DBImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $store = new Animal;
       $store->animal = $request->animal;
       $store->src = $request->src;
       $store->save();
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Animal::find($id);
        Storage::delete("public/img/".$destroy->src);
        $destroy->delete();
        $destroyImage = Image::find($id);
        Storage::delete("public/img/".$destroyImage->src);
        $destroyImage->delete();
        return redirect()->back();
    }

    public function download($id){
        $down = Image::find($id);
        return Storage::download("public/img/".$down->src);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\scenariste;
use Illuminate\Http\Request;

class ScenaristeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scenariste = new scenariste();
        $scenaristes = $scenariste->getAll();
        return view('scenariste',compact('scenaristes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scenariste  $scenariste
     * @return \Illuminate\Http\Response
     */
    public function show(scenariste $scenariste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scenariste  $scenariste
     * @return \Illuminate\Http\Response
     */
    public function edit(scenariste $scenariste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\scenariste  $scenariste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scenariste $scenariste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scenariste  $scenariste
     * @return \Illuminate\Http\Response
     */
    public function destroy(scenariste $scenariste)
    {
        //
    }
}

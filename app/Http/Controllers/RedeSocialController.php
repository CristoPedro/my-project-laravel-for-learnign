<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedeSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rede-social.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rede-social.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
        // agora o resto será salvar os dados nada db l12
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

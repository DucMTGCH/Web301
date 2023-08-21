<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nationals = National::all();

        return view('national.index', ['nationals' => $nationals]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('national.create');
    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $national = new National();
        $national->name = $request->name;


        $national->save();

        return redirect('/nationals');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $national = National::find($id);

        return view('national.show', ['national' => $national]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $national = National::find($id);

        return view('national.edit', ['national' => $national]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $national = National::find($id);
        $national->name = $request->name;


        $national->save();

        return redirect('/nationals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $national = National::find($id);

        $national->delete();

        return redirect('/nationals');
    }
}

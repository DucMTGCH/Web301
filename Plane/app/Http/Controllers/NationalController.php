<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\National;


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
        $nationals = new National();
        $nationals->name = $request->name;


        $nationals->save();

        return redirect('/nationals');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nationals = National::find($id);

        return view('national.show', ['nationals' => $nationals]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nationals = National::find($id);

        return view('national.edit', ['nationals' => $nationals]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nationals = National::find($id);
        $nationals->name = $request->name;


        $nationals->save();

        return redirect('/nationals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nationals = National::find($id);

        $nationals->delete();

        return redirect('/nationals');
    }
}

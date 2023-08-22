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
        $nationalitys = National::all();

        return view('nationality.index', ['nationalitys' => $nationalitys]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nationality.create');
    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nationality = new National();
        $nationality->name = $request->name;


        $nationality->save();

        return redirect('/nationalitys');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nationality = National::find($id);

        return view('nationality.show', ['nationality' => $nationality]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nationality = National::find($id);

        return view('nationality.edit', ['nationality' => $nationality]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nationality = National::find($id);
        $nationality->name = $request->name;


        $nationality->save();

        return redirect('/nationalitys');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nationality = National::find($id);

        $nationality->delete();

        return redirect('/nationalitys');
    }
}

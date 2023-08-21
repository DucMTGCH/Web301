<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typePlane;

class typePlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typePlanes = typePlane::all();

        return view('typePlane.index', ['typePlanes' => $typePlanes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('typePlane.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typePlane = new typePlane();
        $typePlane->name = $request->name;
       
        $typePlane->save();

        return redirect('/typePlanes');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $typePlane = typePlane::find($id);

        return view('typePlane.show', ['typePlane' => $typePlane]);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $typePlane = typePlane::find($id);

        return view('typePlane.edit', ['typePlane' => $typePlane]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typePlane =  typePlane::find($id);
        $typePlane->name = $request->name;
       
        $typePlane->save();

        return redirect('/typePlanes');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typePlane = typePlane::find($id);

        $typePlane->delete();

        return redirect('/typePlanes');
    }
}
    


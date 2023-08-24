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
        $typeplanes = typePlane::all();

        return view('typeplane.index', ['typeplanes' => $typeplanes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('typeplane.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typeplanes = new typePlane();
        $typeplanes->name = $request->name;
       
        $typeplanes->save();

        return redirect('/typeplanes');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $typeplanes = typePlane::find($id);

        return view('typeplane.show', ['typeplanes' => $typeplanes]);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $typeplanes = typePlane::find($id);

        return view('typeplane.edit', ['typeplanes' => $typeplanes]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeplanes =  typePlane::find($id);
        $typeplanes->name = $request->name;
       
        $typeplanes->save();

        return redirect('/typeplanes');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeplanes = typePlane::find($id);

        $typeplanes->delete();

        return redirect('/typeplanes');
    }
}
    


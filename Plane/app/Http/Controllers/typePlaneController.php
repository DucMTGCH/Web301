<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeplane;

class typeplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeplanes = typeplane::all();

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
        $typeplane = new typeplane();
        $typeplane->name = $request->name;
       
        $typeplane->save();

        return redirect('/typeplanes');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $typeplane = typeplane::find($id);

        return view('typeplane.show', ['typeplane' => $typeplane]);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $typeplane = typeplane::find($id);

        return view('typeplane.edit', ['typeplane' => $typeplane]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeplane =  typeplane::find($id);
        $typeplane->name = $request->name;
       
        $typeplane->save();

        return redirect('/typeplanes');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeplane = typeplane::find($id);

        $typeplane->delete();

        return redirect('/typeplanes');
    }
}
    


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return view('type.index', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $types = new Type();
        $types->name = $request->name;
       
        $types->save();

        return redirect('/types');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $types = Type::find($id);
        
        return view('type.show', ['types' => $types]);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $types = Type::find($id);

        return view('type.edit', ['types' => $types]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $types =  Type::find($id);
        $types->name = $request->name;
       
        $types->save();

        return redirect('/types');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $types = Type::find($id);

        $types->delete();

        return redirect('/types');
    }
}
    


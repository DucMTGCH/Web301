<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeplanes;

class typeplanesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeplanes = typeplanes::all();

        return view('typeplanes.index', ['typeplanes' => $typeplanes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('typeplanes.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typeplanes = new typeplanes();
        $typeplanes->name = $request->name;
       
        $typeplanes->save();

        return redirect('/typeplaness');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $typeplanes = typeplanes::find($id);

        return view('typeplanes.show', ['typeplanes' => $typeplanes]);
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $typeplanes = typeplanes::find($id);

        return view('typeplanes.edit', ['typeplanes' => $typeplanes]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeplanes =  typeplanes::find($id);
        $typeplanes->name = $request->name;
       
        $typeplanes->save();

        return redirect('/typeplanes');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeplanes = typeplanes::find($id);

        $typeplanes->delete();

        return redirect('/typeplaness');
    }
}
    


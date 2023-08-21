<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factorys = factory::all();

        return view('factory.index', ['factorys' => $factorys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $factory = new Artist();
        $factory->name = $request->name;
        $factory->nationality = $request->nationality;
        $factory->email = $request->email;
        $factory->phonenumber = $request->phonenumber;
        
        $artist->save();

        return redirect('/artists');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factory = Factory::find($id);

        return view('factory.show', ['factory' => $factory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $factory = factory::find($id);

        return view('factory.edit', ['factory' => $factory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $factory =  Artist::find($id);
        $factory->name = $request->name;
        $factory->phonenumber = $request->phonenumber;
        $factory->nationality = $request->nationality;
        $factory->email = $request->email;

        $artist->save();

        return redirect('/artists');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $factory = factory::find($id);

        $factory->delete();

        return redirect('/factorys');
    }
}

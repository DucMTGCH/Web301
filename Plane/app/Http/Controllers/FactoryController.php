<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;


class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factorys = Factory::all();

        return view('factorys.index', ['factorys' => $factorys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factorys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $factory = new Factory();
        $factory->name = $request->get('name');
        $factory->nationality = $request->get('nationality');
        $factory->email = $request->get('email');
        $factory->phonenumber = $request->get('phonenumber');
        
        $factory->save();

        return redirect('/factorys');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factory = Factory::find($id);

        return view('factorys.show', ['factory' => $factory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $factory = Factory::find($id);

        return view('factorys.edit', ['factory' => $factory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $factory =  Factory::find($id);
        $factory->name = $request->get('name');
        $factory->phonenumber = $request->get('phonenumber');
        $factory->nationality = $request->get('nationality');
        $factory->email = $request->get('email');

        $factory->save();   

        return redirect('/factorys');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $factory = Factory::find($id);

        $factory->delete();

        return redirect('/factorys');
    }
}

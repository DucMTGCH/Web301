<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;
use App\Models\Type;
use App\Models\Plane;
use App\Models\Nationality;
use App\Models\National;



class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Planes = Plane::all();
       
        return view('plane.index', ['Planes' => $Planes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $factorys = Factory::all();
        $Types = Type::all();
       
        $national = National::all();
        return view('Plane.create',[
            'factorys' => $factorys,
            'types' => $Types,
            'nationals' => $national
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Planes = new Plane();
        $Planes->name = $request->name;
        // $Planes->factory_id = $request->factory;
        $Planes->Type_id = $request->type;
        $Planes->national_id = $request->national;
        $Planes->description = $request->description;
        $Planes->color = $request->color;
        $Planes->save();
        $Planes->Factories()->attach($request->factorys);

        return redirect('/planes')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Plane = Plane::find($id);
        // return $Plane->Type;
        // return Type::find($Plane->Type_id);
        return view('plane.show', ['Plane' => $Plane]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Planes = Plane::find($id);
        $Factorys = Factory::all();
        $Types = Type::all();
        $nationals = National::all();
        return view('plane.edit', [
            'Plane' => $Planes,
            'factories' => $Factorys,
            'types' => $Types,
            'nationals' => $nationals
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Planes =  Plane::find($id);
        $Planes->name = $request->name;
        $Planes->factories()->sync($request->factories);
        $Planes->Type_id = $request->types;
        $Planes->national_id = $request->national;
        $Planes->save();
        return redirect('/planes')->with('status', 'Success');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Planes = Plane::find($id);

        $Planes->delete();

        return redirect('/planes');
    }
}




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;
use App\Models\typePlane;
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
        $Factorys = Factory::all();
        $typePlanes = typePlane::all();
       
        $national = National::all();
        return view('Plane.create',[
            'factorys' => $Factorys,
            'typeplanes' => $typePlanes,
            'nationalitys' => $national
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
        $Planes->typePlane_id = $request->typeplane;
        $Planes->national_id = $request->nationality;
        $Planes->description = $request->description;
        $Planes->color = $request->color;
        $Planes->save();
        $Planes->factory()->attach($request->factorys);

        return redirect('/planes')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Planes = Plane::find($id);

        return view('plane.show', ['Planes' => $Planes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Planes = Plane::find($id);
        $Factorys = Factory::all();
        $typePlanes = typePlane::all();
        $nationalitys = National::all();
        return view('Plane.edit', [
            'Plane' => $Planes,
            'Factorys' => $Factorys,
            'typePlanes' => $typePlanes,
            'nationalitys' => $nationalitys
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Planes =  Plane::find($id);
        $Planes->name = $request->name;
        $Planes->Factory()->sync($request->Factorys);
        $Planes->TypePlane_id = $request->typeplanes;
        $Planes->nationality_id = $request->nationality;
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




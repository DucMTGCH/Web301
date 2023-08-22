<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;
use App\Models\typeplanes;
use App\Models\Plane;
use App\Models\National;




class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Planes = Plane::All();
       
        return view('Plane.index', ['Planes' => $Planes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Factorys = Factory::all();
        $typeplanes = typeplane::all();
       
        $nationals = National::all();
        return view('Plane.create',[
            'Factorys' => $Factorys,
            'typeplanes' => $typeplanes,
            'nationals' => $nationals
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Planes = new Plane();
        $Planes->name = $request->name;
        $Planes->typeplanes_id = $request->typeplanes;
        $Planes->national_id = $request->national;
        $Planes->save();
        $Planes->Factorys()->attach($request->Factorys);

        return redirect('/Planes')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Planes = planes::find($id);

        return view('Plane.show', ['Plane' => $Planes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Planes = Plane::find($id);
        $Factorys = Factory::all();
        $typeplanes = TypePlane::all();
        $nationals = National::all();
        return view('Plane.edit', [
            'Plane' => $Planes,
            'Factorys' => $Factorys,
            'typeplanes' => $typeplanes,
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
        $Planes->Factory()->sync($request->Factorys);
        $Planes->TypePlane_id = $request->typeplanes;
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




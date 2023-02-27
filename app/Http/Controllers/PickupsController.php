<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pickups;
use Illuminate\Http\Request;

class PickupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pickups = Pickups::all();
        return $pickups;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $pickups = new Pickups;
        $pickups->name = $request->name;
        $pickups->dni = $request->dni;
        
        if($pickups != null){
            $pickups->save();
            return $pickups;
        }else{
            return "Error al guardar el articulo, complete todos los campos"; 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pickups $pickups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pickups $pickups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idPickups)
    {
        $pickups = Pickups::findOrFail($idPickups);
        $pickups->name = $request->name;
        $pickups->dni = $request->dni;

        $pickups->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idPickups)
    {
        Pickups::destroy($idPickups);
        return "Delete successfully";
    }
}

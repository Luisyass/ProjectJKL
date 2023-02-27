<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Deliveries;
use Illuminate\Http\Request;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = Deliveries::all();
        return $deliveries;
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


        $deliveries = new Deliveries;
        $deliveries->name = $request->name;
        $deliveries->address = $request->address;
        $deliveries->phone = $request->phone;
        $deliveries->recipient = $request->recipient;
        $deliveries->type = $request->type;

        if($deliveries != null){
        $deliveries->save();
        return $deliveries;    
        }else{
            return "Error al guardar el articulo, complete todos los campos";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Deliveries $deliveries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deliveries $deliveries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idDeliveries)
    {
        $deliveries = Deliveries::findOrFail($idDeliveries);
        $deliveries->name = $request->name;
        $deliveries->address = $request->address;
        $deliveries->phone = $request->phone;
        $deliveries->recipient = $request->recipient;
        $deliveries->type = $request->type;

        $deliveries->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idDeliveries)
    {
        Deliveries::destroy($idDeliveries);
        return "Delete Successfully";
    }
}

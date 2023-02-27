<?php

namespace App\Http\Controllers;

use App\Models\Inventories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventories::all();
        return $inventories;

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
        $inventories = new Inventories;
        $inventories->name = $request->name;
        $inventories->description = $request->description;
        $inventories->stock = $request->stock;
        $inventories->price = $request->price;
        $inventories->brand = $request->brand;
       
        
        if ($inventories != null){
            $inventories->save();
            return $inventories;
        }else{
            return "error al guardar articulo, complete todos los campos";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventories $inventories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventories $inventories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idInventories)
    {
        $inventories = Inventories::findOrFail($idInventories);
        $inventories->name = $request-> name;
        $inventories->description = $request->description;
        $inventories->stock = $request->stock;
        $inventories->price = $request->price;
        $inventories->brand = $request->brand;
        $inventories-> save(); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idInventories)
    {
        Inventories::destroy($idInventories);
        return "delete successfully";
    }
}

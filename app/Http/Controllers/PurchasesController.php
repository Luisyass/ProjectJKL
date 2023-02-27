<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Purchases;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchases::all();
        return $purchases;
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


        //aqui se crea un nuevo articulo y se guarda
        $purchases =  new Purchases;
        $purchases->name = $request->name;
        $purchases->provider = $request->provider;
        $purchases->date = $request->date;
        $purchases->quantity = $request->quantity;
        $purchases->total = $request->total;
        $purchases->purchasenum = $request->purchasenum;

        if($purchases != null){
        $purchases->save();
        return $purchases;
        }else{
            return "Error al guardar el articulo, complete todos los campos";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchases $purchases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchases $purchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idpurchases)
    {
        Purchases::destroy($idpurchases);
        return "Delete Successfully";
    }
}

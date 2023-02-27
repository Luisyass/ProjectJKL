<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sales;
use App\Models\Sales as ModelsSales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        return $sales;
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


        $sales = new Sales;
        $sales->name = $request->name;
        $sales->description = $request->description;
        $sales->address = $request->address;
        $sales->date = $request->date;
        $sales->total = $request->total;
        $sales->paymentmethods = $request->paymentmethods;
        $sales->deliveryform = $request->deliveryform;

        if($sales != null){
        $sales->save();
        return $sales;    
        }else{
            return "Error al guardar el articulo, complete todos los campos";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $idSales)
    {
        $sales = Sales::findOrFail($idSales);
        $sales->name = $request->name;
        $sales->description = $request->description;
        $sales->address = $request->address;
        $sales->date = $request->date;
        $sales->total = $request->total;
        $sales->paymentmethods = $request->paymentmethods;
        $sales->deliveryform = $request->deliveryform;

        $sales->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idSales)
    {
        Sales::destroy($idSales);
        return "Delete Successfully";
    }
}

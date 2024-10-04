<?php

namespace App\Http\Controllers;

use App\Models\SalesData;
use Exception;
use Illuminate\Http\Request;

class SalesDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SalesData::all();
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
        try {
            $sales = SalesData::create($request->all());
            return response()->json($sales, 200);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sales = SalesData::findOrFail($id);
        return response()->json($sales);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesData $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sales = SalesData::findOrFail($id);
        $sales->update($request);
        return response()->json($sales);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SalesData::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

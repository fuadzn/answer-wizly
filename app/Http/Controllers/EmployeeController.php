<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Employee::all();
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
            $employee = Employee::create($request->all());
            Log::info('Employee Created: ', ['employee' => $employee->id]);

            return response()->json($employee, 200);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request);
        Log::info('Employee Updated: ', ['employee' => $employee->id]);

        return response()->json($employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        Log::info('Employee Deleted: ', ['employee' => $id]);

        return response()->json(null, 204);
    }
}

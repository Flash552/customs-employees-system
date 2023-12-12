<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employee::all();
        return view('employees.employees', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.add_employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, []);
        $employes = Employee::create($request->all());
        return redirect()->route('')->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('employees.edit_employee');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //        return view('employees.edit_employee');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, []);
        $employes = Employee::find($id);
        $employes->update($request->all());
        return redirect()
            ->route("jop_title.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect()->route("jop_title.index");
    }
}

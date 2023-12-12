<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Employee;
use App\Models\JobTitle;
use App\Models\RankEmp;
use App\Models\StateEmp;
use App\Models\Station;
use App\Models\TypeEmp;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employee::all();
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        return view('employees.employees', compact('employes' ,'cities','jobRanks','typeEmps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        $stations = Station::all();
        $status = StateEmp::all();
        $jopTitles =  JobTitle::all();
        return view('employees.add_employee', compact('cities','jobRanks','typeEmps','stations','status','jopTitles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $this->validate($request, []);
        $employes = Employee::create($request->all());
        return "redirect()->route('employees.add_employee')->with('success', '')";
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

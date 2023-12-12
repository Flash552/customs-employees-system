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
        $employes= Employee::all();
        return view('employees.employees' , compact('employes'));
        
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
       
        $data = [
            'id_emp' => $request->id_emp,
            'PID_emp' => $request->PID_emp,
            'name' => $request->name,
            'phone' => $request->phone,
            'id_jop' => $request->id_jop,
            'status_id' => $request->status_id,
            'emp_type_id' => $request->emp_type_id,
            'rank_id' => $request->rank_id,
            'image' => $request->image,
            'id_station' => $request->id_station,
            'isDeleted' => $request->isDeleted,
            'start_date' => $request->start_date,
            'remotion_date' => $request->remotion_date,
            'end_duty_resson' => $request->end_duty_resson

        ];

        Employee::create($data);
        return redirect()
            ->route("jop_title.index")
            ->with('success', "تم التعديل بنجاح");
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
        $emp = Employee::find($id);
        $data = [
            'id_emp' => $request->id_emp,
            'PID_emp' => $request->PID_emp,
            'name' => $request->name,
            'phone' => $request->phone,
            'id_jop' => $request->id_jop,
            'status_id' => $request->status_id,
            'emp_type_id' => $request->emp_type_id,
            'rank_id' => $request->rank_id,
            'image' => $request->image,
            'id_station' => $request->id_station,
            'isDeleted' => $request->isDeleted,
            'start_date' => $request->start_date,
            'remotion_date' => $request->remotion_date,
            'end_duty_resson' => $request->end_duty_resson

        ];

        $emp->update($data);
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

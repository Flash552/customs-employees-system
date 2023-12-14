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
use Illuminate\Support\Arr;

use function Sodium\add;

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
        $status = StateEmp::all();
        $stations = Station::all();
        return view('employees.employees', compact('stations','status','employes', 'cities', 'jobRanks', 'typeEmps'));
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
        return view('employees.add_employee', compact('cities', 'jobRanks', 'typeEmps', 'stations', 'status', 'jopTitles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, []);
        $employes = Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        $status = StateEmp::all();
        $stations = Station::all();
        $search = [];      
        $empData = array_filter($request->all(), function( $value) {           
                 return !is_null($value);         
        }); 
        array_shift($empData);
        array_shift($empData);
        $employes = Employee::Where($empData)->get();
        return view('employees.employees', compact('stations','status','employes', 'cities', 'jobRanks', 'typeEmps' ,'employes'));


        
//         return response(json_encode($employes));
//         foreach ($request->all() as $key => $value){
          
//           if ($value !==''){
//              $search =  Arr::add($search , $key ,$value);
//           }               
//         }
       
        
//     return $employes;

//         // $employes = Employee::Where('PID_emp', '=', $request->PID_emp)
//         //     ->orWhere('national_number', '=', $request->national_number)
//         //     ->orwhere('name', 'LIKE', '%'.$request->name.'%')
//         //     ->get();
//         // return $employes;

// //        if($request->PID_emp)
// //            $employes = Employee::where('PID_emp', '=', $request->PID_emp)->get();
// //        if($request->name)
// //            $employes = Employee::where('name', 'LIKE', '%'.$request->name.'%')->get();
// //        if($request->national_number)
// //            $employes = Employee::where('national_number', '=', $request->national_number)->get();
// //
// //        if($request->name && $request->PID_emp && $request->national_number)
// //            $employes = Employee::where('name', 'LIKE', '%'.$request->name.'%')
// //                                ->orWhere('PID_emp', '=', $request->PID_emp)
// //                                ->orWhere('national_number', '=', $request->national_number)
// //                                ->get();
//         if($employes == null || $employes->count() == 0 ){
//             return redirect()
//                     ->route('employees.index')
//                     ->with("notFound", "هذا الموظف غير موجود");
//         }
//             return view('employees.employees', compact('stations','status','employes', 'cities', 'jobRanks', 'typeEmps'));
// //        return view('employees.edit_employee');
    }
    public function searchAdvanced(Request $request,string $id)
    {
        $employes = null;
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        $status = StateEmp::all();
        $stations = Station::all();
        if($request != null){
            if($request->name)
                $employes = Employee::where('name', 'LIKE', '%'.$request->name.'%')->get();
            if($request->PID_emp)
                $employes = Employee::where('PID_emp', '=', $request->PID_emp)->get();
            if($request->mother_name)
                $employes = Employee::where('mother_name', '=', $request->mother_name)->get();
            if($request->sex)
                $employes = Employee::where('sex', '=', $request->sex)->get();
            if($request->national_number)
                $employes = Employee::where('national_number', '=', $request->national_number)->get();
            if($request->marital_status)
                $employes = Employee::where('marital_status', '=', $request->marital_status)->get();
            if($request->id_number)
                $employes = Employee::where('id_number', '=', $request->id_number)->get();
            if($request->passport_number)
                $employes = Employee::where('passport_number', '=', $request->passport_number)->get();
            if($request->birthdate)
                $employes = Employee::where('birthdate', '=', $request->birthdate)->get();
            if($request->id_rank)
                $employes = Employee::where('id_rank', '=', $request->id_rank)->get();
            if($request->id_state)
                $employes = Employee::where('id_state', '=', $request->id_state)->get();
            if($request->id_station)
                $employes = Employee::where('id_station', '=', $request->id_station)->get();
            if($request->start_date)
                $employes = Employee::where('start_date', '=', $request->start_date)->get();
            if($request->start_duty_date)
                $employes = Employee::where('start_duty_date', '=', $request->start_duty_date)->get();
            if($request->decision_number)
                $employes = Employee::where('decision_number', '=', $request->decision_number)->get();

            if($request->name && $request->PID_emp && $request->mother_name
                && $request->sex && $request->national_number && $request->marital_status
                && $request->id_number && $request->passport_number && $request->birthdate
                && $request->id_rank && $request->id_state && $request->id_station
                && $request->start_date && $request->start_duty_date && $request->decision_number)
            {
                $employes = Employee::where('name', 'LIKE', '%'.$request->name.'%')
                    ->orWhere('PID_emp', '=', $request->PID_emp)
                    ->orWhere('mother_name', '=', $request->mother_name)
                    ->orWhere('sex', '=', $request->sex)
                    ->orWhere('national_number', '=', $request->national_number)
                    ->orWhere('marital_status', '=', $request->marital_status)
                    ->orWhere('id_number', '=', $request->id_number)
                    ->orWhere('passport_number', '=', $request->passport_number)
                    ->orWhere('birthdate', '=', $request->birthdate)
                    ->orWhere('id_rank', '=', $request->id_rank)
                    ->orWhere('id_state', '=', $request->id_state)
                    ->orWhere('id_station', '=', $request->id_station)
                    ->orWhere('start_date', '=', $request->start_date)
                    ->orWhere('start_duty_date', '=', $request->start_duty_date)
                    ->orWhere('decision_number', '=', $request->decision_number)
                    ->get();
            }


            if($employes == null || $employes->count() == 0 ){
                return redirect()
                    ->route('employees.index')
                    ->with("notFound", "هذا الموظف غير موجود");
            }
            return view('employees.employees', compact('stations','status','employes', 'cities', 'jobRanks', 'typeEmps'));
        }

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        $stations = Station::all();
        $status = StateEmp::all();
        $jopTitles =  JobTitle::all();
        $employee = Employee::find($id);
        return view('employees.edit_employee', compact('cities', 'jobRanks', 'typeEmps', 'stations', 'status', 'jopTitles', 'employee'));
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
            ->route("employees.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Employee::destroy($id);
        return redirect()->route("employees.index");
    }
}

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
        $jopTitles =  JobTitle::all();


        



        return view('employees.employees', compact('stations','status','employes', 'cities', 'jobRanks', 'typeEmps','jopTitles'));
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
        $employee = Employee::create($request->all());
        
       
        // return response(   json_encode($employee)     );
        return redirect()->route('employees.index')->with('success', '');
    }

    public function print(string $id){
        $emp = Employee::find($id)->first();
        return view("employees.modal.print_emp", compact("emp"));
    }

    public function printAll(Request $request, string $id){
        $list = $request->check;
        return $request;
//        foreach ($list as $item){
//            $emp = Employee::where("id_emp", "=", $item)->first();
////            return $emp;
//            return view("employees.modal.print_emp", compact('emp'));
//        }

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
        $jopTitles =  JobTitle::all();

        $search= [];
        $empData = array_filter($request->all(), function( $value) {           
                 return !is_null($value);         
        }); 
        foreach ($empData as $key => $value) {
            array_push($search ,[$key ,'LIKE','%'.$value.'%' ]);
        }
        array_shift($search);
        array_shift($search);
      
        $employes = Employee::Where($search )->get();
        return view('employees.employees', compact('stations','status','employes', 'cities', 'jobRanks', 'typeEmps' ,'jopTitles','employes'));


 // foreach ($empData as $key => $value) {
        //     $sss[$key] ='LIKE'.'%'.$value.'%';
        // }
//          return response(json_encode($sss));
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
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        $status = StateEmp::all();
        $stations = Station::all();

        $empData = array_filter($request->all(), function( $value) {
            return !is_null($value);
        });

        array_shift($empData);

        $employes = Employee::Where($empData)->get();

        if($employes == null || $employes->count() == 0 ){
            return redirect()
                ->route('employees.index')
                ->with("notFound", "هذا الموظف غير موجود");
        }
        else {
            return view('employees.employees', compact('request','stations','status','employes', 'cities', 'jobRanks', 'typeEmps'));
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
    public function update( string $id,Request $request)
    {
       // $this->validate($request, []);
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

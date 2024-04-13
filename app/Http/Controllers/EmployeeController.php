<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Employee;
use App\Models\JobTitle;
use App\Models\Marital_status;
use App\Models\RankEmp;
use App\Models\StateEmp;
use App\Models\Station;
use App\Models\TypeEmp;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

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
        $marital_status = Marital_status::all();

        return view('employees.employees', compact('stations', 'status', 'employes', 'cities','marital_status', 'jobRanks', 'typeEmps', 'jopTitles'));
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
        $marital_status = Marital_status::all();
        return view('employees.add_employee', compact('cities','marital_status', 'jobRanks', 'typeEmps', 'stations', 'status', 'jopTitles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;

        $validateRules = [
         //   'PID_emp' =>  ['required', 'unique:employees', 'numeric', 'max:11'],
            'name' =>  ['required',  'max:150'],
          //  'phone' =>  ['nullable','unique:employees ,phone', 'max:11', 'numeric'],
            'id_jop' =>  ['required', 'numeric', 'exists:jop_title,id_jop'],
            'id_state' =>  ['required', 'numeric', 'exists:status_emp,id_state'],
            'id_type_emp' =>  ['required', 'numeric', 'exists:type_emp,id_type_emp'],
            'id_rank' =>  ['required', 'numeric', 'exists:rank_emp,id_rank'],
            'image' =>  ['nullable','image'],
            'id_station' =>  ['required', 'numeric'],
            'premotion_date'  =>  ['nullable', 'date'],
            'last_premotion_date' =>  ['nullable', 'date'],
            'start_duty_date' =>  ['nullable', 'date'],
            'start_date' =>  ['nullable', 'date'],
            'end_duty_resson' =>  ['nullable'],
            'marital_status' =>  ['nullable'],
            'sex' =>  ['nullable'],
            'decision_number' =>  ['nullable'],
            'decision_date' =>  ['nullable', 'date'],
            'mother_name' =>  ['nullable'],
           // 'national_number' =>  ['nullable', 'max:20', 'numeric'],
            'id_number' =>  ['nullable', 'max:20'],
            'passport_number' =>  ['nullable'],
            'birthdate' =>  ['nullable', 'date'],
            //'email' =>  ['nullable','unique:employees ,email'],
            'bank_name' =>  ['nullable'],
            'bank_branch' =>  ['nullable'],
            'bank_account_id' =>  ['nullable'],
            'expertise' =>  ['nullable'],
            'expertise_start_date' =>  ['nullable', 'date'],
        ];

        $this->validate($request, $validateRules);
        //$request->validate($validateRules);
        // $validator = FacadesValidator::make($request->all(),$validateRules);

        $employe = Employee::create($request->all());

        if($request->hasFile("image")){
            $employe->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect()->route('employees.index')->with('success', '');
    }

    public function print(string $id)
    {
        $emp = Employee::find($id)->first();
        return view("employees.modal.print_emp", compact("emp"));
    }

    public function printAll(Request $request, string $id)
    {
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
        $empData = array_filter($request->all(), function ($value) {
            return !is_null($value);
        });
        array_shift($empData);
        array_shift($empData);

        $employes = Employee::Where($empData)->get();
        if ($employes == null || $employes->count() == 0) {
            return redirect()
                ->route('employees.index')
                ->with("notFound", "هذا الموظف غير موجود");
        } else {
            return view('employees.employees', compact('stations', 'status', 'employes', 'cities','marital_status', 'jobRanks', 'typeEmps'));
        }
        //        return view('employees.employees', compact('stations','status','employes', 'cities','marital_status', 'jobRanks', 'typeEmps' ,'employes'));


    }
    public function searchAdvanced(Request $request, string $id)
    {
        $cities = City::all();
        $jobRanks = RankEmp::all();
        $typeEmps = TypeEmp::all();
        $status = StateEmp::all();
        $stations = Station::all();

        $empData = array_filter($request->all(), function ($value) {
            return !is_null($value);
        });

        array_shift($empData);

        $employes = Employee::Where($empData)->get();

        if ($employes == null || $employes->count() == 0) {
            return redirect()
                ->route('employees.index')
                ->with("message", [
                    "type" => "primary",
                    "msg" => "هذا الموظف غير موجود"
                ]);
        } else {
            return view('employees.employees', compact('request', 'stations', 'status', 'employes', 'cities','marital_status', 'jobRanks', 'typeEmps'));
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
        $marital_status = Marital_status::all();
        $employee = Employee::find($id);
        return view('employees.edit_employee', compact('cities','marital_status', 'jobRanks', 'typeEmps', 'stations', 'status', 'jopTitles', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {
        $validateRules = [


            'PID_emp' =>  ['required', 'unique:employees', 'numeric', 'max:11'],
            'name' =>  ['required',  'max:150'],
            'phone' =>  ['nullable', 'max:11', 'numeric'],
            'id_jop' =>  ['required', 'numeric', 'exists:jop_title'],
            'id_state' =>  ['required', 'numeric', 'exists:status_emp,id_state'],
            'id_type_emp' =>  ['required', 'numeric', 'exists:type_emp,id_type_emp'],
            'id_rank' =>  ['required', 'numeric', 'exists:rank_emp,id_rank'],
            'image' =>  ['nullable'],
            'id_station' =>  ['required', 'numeric'],
            'premotion_date'  =>  ['nullable', 'date'],
            'last_premotion_date' =>  ['nullable', 'date'],
            'start_duty_date' =>  ['nullable', 'date'],
            'start_date' =>  ['nullable', 'date'],
            'end_duty_resson' =>  ['nullable'],
            'marital_status' =>  ['nullable'],
            'sex' =>  ['nullable'],
            'decision_number' =>  ['nullable'],
            'decision_date' =>  ['nullable', 'date'],
            'mother_name' =>  ['nullable'],
            'national_number' =>  ['nullable', 'max:20', 'numeric'],
            'id_number' =>  ['nullable', 'max:20'],
            'passport_number' =>  ['nullable'],
            'birthdate' =>  ['nullable', 'date'],
            'email' =>  ['nullable'],
            'bank_name' =>  ['nullable'],
            'bank_branch' =>  ['nullable'],
            'bank_account_id' =>  ['nullable'],
            'expertise' =>  ['nullable'],
            'expertise_start_date' =>  ['nullable', 'date']


        ];
        $this->validate($request, $validateRules);
        $employes = Employee::find($id);
        $employes->update($request->all());
        return redirect()
            ->route("employees.index")
            ->with("message", [
                "type" => "success",
                "msg" => "تم النعديل بنجاخ"
            ]);
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

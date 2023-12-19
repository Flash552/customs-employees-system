<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Trams;
use mysql_xdevapi\Exception;

class TramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        $trams = Trams::all();
        return view("trams.trams", compact("trams","stations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//            $tms = Trams::where("id_emp", "=", $request->id_emp)->first();
            $data = [
                "id_emp" => $request->id_emp,
                "id_from_station" => $request->id_from_station,
                "id_to_station" => $request->id_to_station,
                "confirm_first" => $request->confirm_first == 1 ? 1 : 0,
                "confirm_date_first" => $request->confirm_first ==1 ? Date("Y-m-d") : null,
                "confirm_two" => $request->confirm_two == 1 ? 1 : 0,
                "confirm_date_two" => $request->confirm_two == 1 ? Date("Y-m-d") : null,
            ];
            $data = array_filter($data, function( $value) {
                return !is_null($value);
            });
            Trams::create($data);
            return redirect()
                ->route("employees.index")->with("message", [
                    "type" => "primary",
                    "msg" => "تم اضافة طلب انتقال للموظف"
                ]);
        } catch (Exception $e){
            return redirect()
                ->route("trams.index")->with("message", [
                    "type" => "danger",
                    "msg" => $e->getMessage(),
                ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
//        $stations = Station::all();
//        return view("employees.modal.add_trams", compact("stations"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tms = Trams::find($id);
        $tms->update([
            "id_to_station" => $request->id_to_station,
            "confirm_first" => $request->confirm_first,
            "confirm_date_first" => $request->confirm_first ==1 ? Date("Y-m-d") : null,
            "confirm_two" => $request->confirm_two,
            "confirm_date_two" => $request->confirm_two == 1 ? Date("Y-m-d") : null,
        ]);
        return redirect()
            ->route("trams.index")->with("message", [
                "type" => "primary",
                "msg" => "تم التعديل بنجاح"
            ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        Trams::destroy($id);
//        return redirect()->back()->with("message", [
//            "type" => "danger",
//            "msg" => "تم الحذف بنجاح"
//        ]);
//        return Trams::where("id_tran", $id)->first();
        Trams::withTrashed()
            ->where("id_tran", $id)
            ->forceDelete();
        return redirect()->back()->with("message", [
            "type" => "danger",
            "msg" => "تم الحذف بنجاح"
        ]);
    }
}

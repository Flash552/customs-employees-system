<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('absence.absence');
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
        $ValidationRules = [
            "id_emp" => ['required','numeric'],
            "from_date" => ['required','date'],
            "to_date" => ['required','date'],
        ];
        $this->validate($request, $ValidationRules);

        $data = [
            "id_emp" => $request->id_emp,
            "from_date" => $request->id_from_station,
            "to_date" => $request->id_to_station,

        ];
        Absence::create($data);
        return redirect()
            ->route("Absence.index")->with("message", [
                "type" => "success",
                "msg" => "تم الإضافة بنجاح"
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $id = $request->check[0];
        return $id;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

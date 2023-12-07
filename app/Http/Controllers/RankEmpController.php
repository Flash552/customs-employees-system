<?php

namespace App\Http\Controllers;

use App\Models\RankEmp;
use Illuminate\Http\Request;
use App\Models\TypeEmp;
class RankEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = TypeEmp::all();
        $ranks = RankEmp::all();
        return view('settings.rank_emp.rank_emp', compact("types" , "ranks"));
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
        $data = [
            'id_rank' => $request->id_rank,
            'title_rank' => $request->title_rank,
            'id_type_emp' => $request->id_type_emp
        ];

        RankEmp::create($data);
   
        
    //return response("ssssss");
    return redirect()->route("rank_emp.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("settings.rank_emp.edit_rank_emp");
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
        $rankEmp = RankEmp::find($id);
        $data = [
         
            'title_rank' => $request->title_rank,
            'id_type_emp' => $request->id_type_emp
        ];
        $rankEmp->update($data);
        return redirect()
            ->route("rank_emp.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RankEmp::destroy($id);
        return redirect()->route("rank_emp.index");
    }
}

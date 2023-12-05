<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeEmp;





class TypeEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = TypeEmp::all() ;
        return view('settings.type_emp.type_emp', compact("types"));
    }

    //    public function showLink(){
    //        return view('')
    //    }

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
            'id_type_emp' => $request->id_type_emp,
            'title_type' => $request->title_type
        ];

        TypeEmp::create($data);

        return redirect()
            ->route("type_emp.index")
            ->with('success', "تم الإضافة بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        return view('settings.type_emp.edit_type_emp');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeEmp = TypeEmp::find($id);
        $typeEmp->update([
            "title_type" => $request->title_type
        ]);
        return redirect()
            ->route("type_emp.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TypeEmp::destroy($id);
        return redirect()->route("type_emp.index");
    }
}


// $m= new TypeEmpController();
// $m ->store(['title_type' =>]);

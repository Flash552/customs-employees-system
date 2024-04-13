<?php

namespace App\Http\Controllers;

use App\Models\Marital_status;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    public function index()
    {
        $marital_status = Marital_status::all();
        return view('settings.marital_status.marital_status' , compact("marital_status"));
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
       

        Marital_status::create($request->all());


    //return response("ssssss");
    return redirect()->route("marital_status.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $marital_status = Marital_status::all();

        return view('settings.marital_status.edit_marital_status' ,   compact("marital_status"));

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
        $marital_state = Marital_status::find($id);
       
        $marital_state->update($request->all());
        return redirect()
            ->route("marital_status.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Marital_status::destroy($id);
        return redirect()->route("marital_status.index");
    }
}

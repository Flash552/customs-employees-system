<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;

class JopTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $jobs = JobTitle::all();
        return view('settings.jop_title.jop_title' , compact("jobs"));
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
            'id_jop' => $request->id_jop,
            'title_jop' => $request->title_jop
           
        ];

        JobTitle::create($data);
   
        
    //return response("ssssss");
    return redirect()->route("jop_title.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $jobs =JobTitle::all();

        return view('settings.jop_title.edit_jop_title' ,   compact("jobs"));

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
        $job = JobTitle::find($id);
        $data = [
            'id_jop' => $request->id_jop,
            'title_jop' => $request->title_jop
           
        ];
        $job->update($data);
        return redirect()
            ->route("jop_title.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JobTitle::destroy($id);
        return redirect()->route("jop_title.index");
    }
}

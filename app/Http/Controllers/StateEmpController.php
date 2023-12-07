<?php

namespace App\Http\Controllers;

use App\Models\StateEmp;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use PhpParser\Node\Stmt\TryCatch;

class StateEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = StateEmp::all();
        return view('settings.status_emp.state_emp' , compact('status'));
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
        try {
            $data = [
                'id_status' => $request->id_status,
                'title_status' => $request->title_status
            ];

            StateEmp::create($data);


        } catch (\Throwable $th) {
          return response("sssssssss");

            return redirect()->back()->with('error', $th->getMessage());
        }

    return redirect()->route("status_emp.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('settings.status_emp.edit_state_emp');
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
        $StateEmp = StateEmp::find($id);

        $data = [
            "title_status" => $request->title_status,

        ];
        $StateEmp->update($data);
        return redirect()
            ->route("status_emp.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        StateEmp::destroy($id);
        return redirect()->route("status_emp.index");
    }
}

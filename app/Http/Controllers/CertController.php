<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("certs.certs");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certs.add_cert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        // نقل الموظف بعد الإضافة الى صفحة المؤهلات العلمية
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

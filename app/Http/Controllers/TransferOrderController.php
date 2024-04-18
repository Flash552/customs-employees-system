<?php

namespace App\Http\Controllers;

use App\Models\TransferOrder;
use Illuminate\Http\Request;
use  App\Models\Station;

class TransferOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        $Transfer = TransferOrder::all();
        return view("Transfer.Transfer", compact("TransferOrders","stations"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransferOrder $transferOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransferOrder $transferOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransferOrder $transferOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransferOrder $transferOrder)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        $cities = City::all();
        return view('settings.stations.stations' , compact('cities','stations'));
//        return $stations->city->id_city;
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
                'id_station' => $request->id_station,
                'name_station' => $request->name_station,
                'id_city' => $request->id_city
            ];

            Station::create($data);
        } catch (\Throwable $th) {
           return redirect()->back()->with('error', $th->getMessage());
        }

    return redirect()->route("stations.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('settings.stations.edit_station');
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
        $station = Station::find($id);
        ['id_station','name_station' ,'id_city'];
        $data = [
            "name_station" => $request->name_station,
             "id_city" => $request->id_city
        ];
        $station->update($data);
        return redirect()
            ->route("stations.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Station::destroy($id);
        return redirect()->route("stations.index");
    }

}

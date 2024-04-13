<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('settings.cities.cities', compact('cities'));
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
       $validateRules = [
            'city_name' =>  ['required', 'unique:cities', 'max:35'],    
        ];
        $this->validate($request, $validateRules);
            $data = [
                
                'city_name' => $request->city_name
            ];

            City::create($data);
        
        

        return redirect()->route("cities.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('settings.cities.edit_city');
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
        $validateRules = [
            'id_city' => ['required', 'exists:cities', 'max:11'],
            'city_name' =>  ['required', 'unique:cities,city_name', 'max:35'],    
        ];
        $this->validate($request, $validateRules);
        $city = City::find($id); 
        $data = [
            "city_name" => $request->city_name
        ];
        $city->update($data);
        return redirect()
            ->route("cities.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        City::destroy($id);
        return redirect()->route("cities.index");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TransferOrder;
use Illuminate\Http\Request;
use  App\Models\Station;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;
class TransferOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        $transferOrders = TransferOrder::all();
        return view("transferOrders.transferOrders", compact("transferOrders","stations"));
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
        // protected $fillable = ["id_transfer_order", "id_emp", "id_from_station", "id_to_station",
        // "title_transfer_order","is_confirmed", "desc" ];
        $validateRules = [
            //   'PID_emp' =>  ['required', 'unique:employees', 'numeric', 'max:11'],
            //    'id_transfer_order' =>  ['required',  'max:150'],
                'id_emp' =>  ['required', 'numeric','exists:employees'],
                'id_from_station' =>  ['required', 'numeric', 'exists:stations'],
                'id_to_station' =>  ['required', 'numeric', 'exists:stations'],
                'title_transfer_order' =>  ['required'],
                // 'is_confirmed' =>  ['required', 'numeric', 'exists:rank_emp,id_rank'],
                'desc' =>  ['nullable'],
           ];
   
           // $this->validate($request, $validateRules);
           //$request->validate($validateRules);
           $validator = FacadesValidator::make($request->all(),$validateRules);
           if ($validator->fails()) {
               return back()->withErrors($validator)
                           ->withInput();
           }
        $data = [
            'id_transfer_order' => $request->id_transfer_order,
            'id_emp' => $request->id_emp,
            'id_from_station' => $request->id_from_station,
            'id_to_station' => $request->id_to_station,
            'title_transfer_order' => $request->title_transfer_order,
            'is_confirmed' => $request->is_confirmed,     
            'desc' => $request->desc,
        ];
        TransferOrder::create($data);
        return redirect()->route("transferOrders.index")->with('success', "تم الاضافة بنجاح");
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
    public function update(Request $request, $id)
    {
        $transferOrder = TransferOrder::find($id);
        $validateRules = [
            //   'PID_emp' =>  ['required', 'unique:employees', 'numeric', 'max:11'],
            //    'id_transfer_order' =>  ['required',  'max:150'],
                'id_emp' =>  ['required', 'numeric','exists:employees'],
                'id_from_station' =>  ['required', 'numeric', 'exists:stations'],
                'id_to_station' =>  ['required', 'numeric', 'exists:stations'],
                'title_transfer_order' =>  ['required'],
                // 'is_confirmed' =>  ['required', 'numeric', 'exists:rank_emp,id_rank'],
                'desc' =>  ['nullable'],
           ];
           // $this->validate($request, $validateRules);
           //$request->validate($validateRules);
           $validator = FacadesValidator::make($request->all(),$validateRules);
           if ($validator->fails()) {
               return back()->withErrors($validator)
                           ->withInput();
           }
        $data = [
            'id_transfer_order' => $request->id_transfer_order,
            'id_emp' => $request->id_emp,
            'id_from_station' => $request->id_from_station,
            'id_to_station' => $request->id_to_station,
            'title_transfer_order' => $request->title_transfer_order,
            'is_confirmed' => $request->is_confirmed,     
            'desc' => $request->desc,
        ];
        $transferOrder->update($data);
        return redirect()
            ->route("transferOrders.index")
            ->with('success', "تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransferOrder $transferOrder)
    {
        //
    }
}

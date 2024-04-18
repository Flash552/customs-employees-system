<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "emp_transfers";
    protected $primaryKey   ="id_tran";
    //  protected  $softDelete = true;
    protected $fillable = ["id_tran", "id_emp", "id_transfer_order",
        "confirm_first","confirm_date_first", "confirm_two", "confirm_date_two"  ];

    public function employee(){
        return $this->belongsTo(Employee::class, "id_emp")->withDefault();
    }
    public function fromStation(){
        return $this->belongsTo(Station::class, "id_from_station")->withDefault();
    }
    public function toStation(){
        return $this->belongsTo(Station::class, "id_to_station")->withDefault();
    }
}

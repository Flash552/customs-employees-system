<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trams extends Model
{
    use HasFactory;
    protected $table = "emp_trams";
    protected $primaryKey   ="id_tran";
    //  protected  $softDelete = true;
    protected $fillable = ["id_tran", "id_emp", "id_from_station", "id_to_station",
        "confirm_first","confirm_date_first", "confirm_two", "confirm_date_two" , "deleted_at","created_at" ,"updated_at" ];

    public function employee(){
        return $this->belongsTo(Employee::class, "id_emp");
    }
    public function fromStation(){
        return $this->belongsTo(Station::class, "id_from_station");
    }
    public function toStation(){
        return $this->belongsTo(Station::class, "id_to_station");
    }
}

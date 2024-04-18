<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransferOrder extends Model
{
//     "id_transfer_order" integer [pk, increment]
//   "id_emp" integer 
//   "id_user" integer
//   "id_from_station" integer 
//   "id_to_station" integer 
//   "title_transfer_order" varchar(255) 
//   "is_confirmed" bool
//   "desc" varchar(255)  
//   "deleted_at" datetime [default: NULL]
//   "created_at" datetime [default: NULL]
//   "updated_at" datetime [default: NULL]
    use HasFactory;
    use SoftDeletes;
    protected $table = "transfer_orders";
    protected $primaryKey   ="id_transfer_order";
 
    protected $fillable = ["id_transfer_order", "id_emp", "id_from_station", "id_to_station",
        "title_transfer_order","is_confirmed", "desc" ];

    public function order_employee(){
        return $this->belongsTo(Employee::class, "id_emp")->withDefault();
    }
    public function transferred_employees(){
        return $this->hasMany(Transfer::class, "id_transfer_order");
    }
    public function fromStation(){
        return $this->belongsTo(Station::class, "id_from_station")->withDefault();
    }
    public function toStation(){
        return $this->belongsTo(Station::class, "id_to_station")->withDefault();
    }
}
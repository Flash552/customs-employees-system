<?php

namespace App\Models;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $table = "stations";
    protected $primaryKey   ="id_station";
    protected $fillable = ['id_station','name_station' ,'id_city'];

    public function city(){
        return $this->belongsTo(City::class, 'id_city');
    }
}

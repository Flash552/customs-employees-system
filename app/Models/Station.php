<?php

namespace App\Models;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Station extends Model
{
    use HasFactory;
    protected $table = "stations";
    protected $primaryKey   ="id_station";
    protected $fillable = ['id_station','name_station' ,'id_city'];

<<<<<<< HEAD
    public function city(){
        return $this->belongsTo(City::class, 'id_city');
    }
=======


    public function getCity(): BelongsTo
    {
        return $this->belongsTo(City::class,'id_city');
    }

>>>>>>> 0b39e7ae21d61a433e07cdaff606732c0c27284c
}

<?php

namespace App\Models;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "stations";
    protected $primaryKey   ="id_station";
    protected $fillable = ['id_station','name_station' ,'id_city'];

    public function city(){
        return $this->belongsTo(City::class, 'id_city')->withDefault();
    }
}

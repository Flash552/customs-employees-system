<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absence extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "absence";
    protected $primaryKey   ="id_absence";
    protected $fillable = ['id_absence','id_emp','from_date','to_date'];


    
}

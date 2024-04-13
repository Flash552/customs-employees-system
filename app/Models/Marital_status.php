<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marital_status extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "marital_status";
    protected $primaryKey   ="id_marital_state";
    protected $fillable = ['id_marital_state','marital_state_title'];
}

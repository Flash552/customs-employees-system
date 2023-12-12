<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateEmp extends Model
{
    use HasFactory;
    protected $table = "status_emp";
    protected $primaryKey   ="id_state";
    protected $fillable = ['id_state','title_state'];
}

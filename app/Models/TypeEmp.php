<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEmp extends Model
{
    use HasFactory;
    protected $table = "type_emp";
     protected $fillable = ['id_type_emp','title_type'];


}

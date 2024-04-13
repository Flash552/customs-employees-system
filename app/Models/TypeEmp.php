<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeEmp extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "type_emp";
    protected $primaryKey   ="id_type_emp";
    protected $fillable = ['id_type_emp','title_type'];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $primaryKey   ="id_emp";

    protected $fillable = [
       'id_emp',
       'PID_emp',
       'name',
       'phone',
       'id_jop',
       'id_state',
       'id_type_emp',
       'id_rank',
       'image',
       'id_station',
       'isDeleted',
       'premotion_date',
       'last_premotion_date',
       'end_duty_resson',
       'mother_name',
       'sex',
       'mother_name',
       'national_number',
       'id_number',
       'passport_number',
       'birthdate'


   ];

}

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
       'start_duty_date',
       'start_date',
       'end_duty_resson',
       'marital_status',
       'sex',
       'decision_number',
       'decision_date',
       'mother_name',
       'national_number',
       'id_number',
       'passport_number',
       'birthdate'


   ];

}

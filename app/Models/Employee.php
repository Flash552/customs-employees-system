<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $primaryKey   ="id_emp";
    protected $fillable = ['id_emp','PID_emp','name','phone','id_jop','status_id','emp_type_id','rank_id','image','id_station','isDeleted','start_date','stop_date','remotion_date','end_duty_resson'];
}

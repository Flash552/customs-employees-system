<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $primaryKey   ="id_emp";
	// الرقم	الإسم	الحالة الإجتماعية	الجنس	
    // اسم الأم	الدرجة الوظيفية	المؤهل العلمي	الرتبة	حالة العمل	جهة العمل
    // 	تاريخ التعيين	تاريخ الميلاد	تاريخ اخر ترقية	رقم البطاقة	رقم الجواز
    // 	الرقم الوطني	تاريخ المباشرة	الشريحة	مدة الإستحقاق	الاستحقاق القادم	
    // تاريخها	سببها	تاريخ القرار	رقم القرار	صورة شخصية	الصفة	ملاحظة
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
